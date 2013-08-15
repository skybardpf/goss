<?php

class LoginForm extends CFormModel
{
	public $login;
	public $password;
	public $rememberMe;

	private $_identity;

	/**
	 * Declares the validation rules.
	 * The rules state that login and password are required,
	 * and password needs to be authenticated.
	 */
	public function rules()
	{
		return array(
			array('login, password', 'required'),
			array('rememberMe', 'boolean'),
			// password needs to be authenticated
			array('password', 'authenticate'),
		);
	}

	/**
	 * Declares attribute labels.
	 */
	public function attributeLabels()
	{
		return array(
			'login'      => 'Логин',
			'password'   => 'Пароль',
			'rememberMe' => 'Запомнить меня',
		);
	}

	/**
	 * Authenticates the password.
	 * This is the 'authenticate' validator as declared in rules().
	 */
	public function authenticate($attribute, $params)
	{
		if(!$this->hasErrors())
		{
			$this->_identity=new UserIdentity($this->login,$this->password);
			if(!$this->_identity->authenticate())
				$this->addError('password', 'Неправильное имя пользователя или пароль.');
		}
	}

	/**
	 * Logs in the user using the given login and password in the model.
	 * @return boolean whether login is successful
	 */
	public function login()
	{
		if($this->_identity===null)
		{
			$this->_identity=new UserIdentity($this->login, $this->password);
			$this->_identity->authenticate();
		}
		if($this->_identity->errorCode===UserIdentity::ERROR_NONE)
		{
			$duration=$this->rememberMe ? 3600*24*30 : 0; // 30 days
			Yii::app()->user->login($this->_identity,$duration);
			return true;
		}
		else
			return false;
	}
}

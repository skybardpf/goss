<?php
/**
 * Модель: админы
 * @author Burtsev Roman <roman@artektiv.ru>
 */
class Admin extends CActiveRecord
{
    public $login;
    public $password;

    /**
     * @param string $className
     * @return Region
     */
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    /**
     * @return string
     */
    public function tableName()
    {
        return 'admin';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('login, password', 'required'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'login'           => 'Логин',
            'password'        => 'Пароль',
        );
    }

    /**
     * @return array
     */
    public function getAdmins()
    {
        $dbQuery = $this->findAll();
        $items = array();
        foreach($dbQuery as $item) {
            $items[$item->login] = $item->password;
        }
        return $items;
    }
}
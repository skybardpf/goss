<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class SupplierIdentity extends CUserIdentity
{
    private $_id;

	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
        /**
         * @var Supplier $record
         */
        $record = Supplier::model()->findByAttributes(
            array('login' => $this->username)
        );
		
        if($record===null)
            $this->errorCode = self::ERROR_USERNAME_INVALID;
        else if($record->password !== md5($this->password))
            $this->errorCode=self::ERROR_PASSWORD_INVALID;
        else
        {
            $this->_id = $record->id;
            $this->setState('organization_id', $record->organization_id);
            $this->setState('region_id', $record->region_id);
            $this->errorCode = self::ERROR_NONE;
        }

        return !$this->errorCode;
	}

    public function getId()
    {
        return $this->_id;
    }
}
<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
//Yii::import('application.modules.administrator.models.SUser');
class UserIdentity extends CUserIdentity {

    /**
     * Authenticates a user.
     * The example implementation makes sure if the username and password
     * are both 'demo'.
     * In practical applications, this should be changed to authenticate
     * against some persistent user identity storage (e.g. database).
     * @return boolean whether authentication succeeds.
     */
    private $_id;

    /**
     * Authenticates a user.
     * @return boolean whether authentication succeeds.
     */
    public function authenticate() {
        $user = SUser::model()->find('status_id = 1 and LOWER(username)=?', array(strtolower($this->username)));
        //$user=sUser::model()->find('LOWER(username)=?',array(strtolower($this->username)));
        if ($user === null)
            $this->errorCode = self::ERROR_USERNAME_INVALID;
        else if ($user->status_id != 1)
            $this->errorCode = self::ERROR_USERNAME_INVALID;
        else if ($user->password != md5($this->password))
            $this->errorCode = self::ERROR_PASSWORD_INVALID;
        else {
            $this->_id = $user->id;
            $this->username = $user->username;
            $this->errorCode = self::ERROR_NONE;
        }
        return $this->errorCode == self::ERROR_NONE;
    }

    /**
     * @return integer the ID of the user record
     */
    public function getId() {
        return $this->_id;
    }

}

<?php
class AdminIdentity extends CUserIdentity {
    public function authenticate() {
        $sysuser = Sysuser::model()->findByAttributes(array('user_id' => $this->username));
        if ($sysuser === null) {
            //echo "user not exist";
            $this->errorCode = self::ERROR_USERNAME_INVALID;
        } else if ($sysuser->password !== $this->password) {
            //echo "wrong password";
            $this->errorCode = self::ERROR_PASSWORD_INVALID;
        } else {
            // semua ok
            $this->errorCode = self::ERROR_NONE;
            //Yii::app()->session['priv'] = $sysuser->priv;
            //Yii::app()->session['theme'] = $users->theme;
        }
        return !$this->errorCode;
    }
}
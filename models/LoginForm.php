<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * LoginForm is the model behind the login form.
 *
 * @property User|null $user This property is read-only.
 *
 */
class LoginForm extends Model
{
    public $username;
    public $fullname;
    public $email;
    public $password;
    public $auth_key;
    public $rememberMe = false;

    private $_user = false;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['password', 'email'], 'required'],
            [['username', 'fullname', 'password', 'email'], 'string', 'max' => 255],
            ['rememberMe', 'boolean'],
            ['password', 'validatePassword'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            // 'id' => Yii::t('app', 'ID'),
            'username' => Yii::t('app', 'Имя'),
            'fullname' => Yii::t('app', 'Фамилия'),
            'password' => Yii::t('app', 'Пороль'),
            'email' => Yii::t('app', 'E-mail'),
            'rememberMe' => Yii::t('app', 'Запомнить меня'),
        ];
    }

    /**
     * Validates the password.
     * This method serves as the inline validation for password.
     *
     * @param string $attribute the attribute currently being validated
     * @param array $params the additional name-value pairs given in the rule
     */
    public function validatePassword($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $user = $this->getUser();

            if (!$user || !$user->validatePassword($this->password)) {
                $this->addError($attribute, Yii::t('app', 'Логин/Пороль введены не верно!!!'));
            }
        }
    }

    /**
     * Logs in a user using the provided username and password.
     * @return bool whether the user is logged in successfully
     */
    public function login()
    {
        if ($this->validate()) {
            if($this->rememberMe){
                $u = $this->getUser(); 
                $u->generateAuthKey();
                $u->save();
            }
            return Yii::$app->user->login($this->getUser(), $this->rememberMe ? 3600*24*30 : 0);
        }
        return false;
    }

    /**
     * Finds user by [[email]]
     *
     * @return User|null
     */
    public function getUser()
    {
        if ($this->_user === false) {
            $this->_user = User::findByUsername($this->email);
        }

        return $this->_user;
    }
}

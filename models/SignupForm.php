<?php
namespace app\models;
use yii\base\Model;

class SignupForm extends Model{

    public $username;
    public $password;
    public $email;

    public function rules() {
        return [
            [['username', 'password', 'email'], 'required', 'message' => 'Заполните поле'],
            ['email', 'email'],
            ['username', 'unique', 'targetClass' => User::className(),  'message' => 'Этот логин уже занят'],
        ];
    }

    public function attributeLabels() {
        return [
            'username' => 'Логин',
            'password' => 'Пароль',
            'email' => 'Email'
        ];
    }

}
<?php


namespace App\Models;


class User extends Model
{
    static $tableName = 'users';
    public $id;
    public $email;
    public $password;
    public $name;
    public $token;

    public static function auth(){
        if ($_COOKIE['userId'] && !$_SESSION['userId']){
            $token = $_COOKIE['userId'];
            $user = User::select("token='$token'");
            $_SESSION['userId'] = $user->id;
        }
        if($_SESSION['userId']){
            return User::find($_SESSION['userId']);
        }
        return false;
    }
}
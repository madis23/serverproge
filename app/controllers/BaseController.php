<?php
namespace App\Controllers;
use App\DI;
use App\Models\Employee;
use App\Models\Product;
use App\Models\User;
use PDO;
use PDOException;
use PDOStatement;
class BaseController {
    public function page1(){
        view('page1');
    }
    public function page2(){
        view('page2');
    }
    public function home(){
        if($_GET['color']) {
            $_SESSION['color'] = $_COOKIE['color'] = $_GET['color'];
            setcookie('color', $_GET['color'], time() + (86400 * 30), '/');
        }
        if(!$_SESSION['color'] && $_COOKIE['color'] ){
            $_SESSION['color'] = $_COOKIE['color'];
        }
        var_dump($_SESSION['color']);
        //view('index');
    }
    public function secret(){
        if(User::auth()){
            echo "Super secret message <a href='/logout'>logout</a>";
        } else{
            echo "Access denied you dipshit.";
        }
    }
}
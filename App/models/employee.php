<?php

namespace App\Models;

use App\DI;
use PDO;
use PDOStatement;
class Employee extends Model
{
    public static $tableName = 'employee';
    public $id;
    public $fname;
    public $lname;
    public $bday;
    public $phone;


}
<?php

/**
 * Created by PhpStorm.
 * User: 21103436
 * Date: 14/09/2015
 * Time: 1:54 PM
 */

//require the db connection
/*$connection_string = "dbname=TestDB user=postgres password=root";

$db_connection = pg_connect($connection_string);*/

class Admin
{
    var $name;
    var $password;

    //get the name
    function getName(){
        return $this->name;
    }

    function User($name, $password){
        $this->name = $name;
        $this->password = md5($password);
    }

    //access the database
    function authentication(){
        $name = $this->name;
        $password = $this->password;

        //query to login
        $query = "SELECT name, password FROM users WHERE user_name = $name AND user_password = $password";

        $results = pg_query($query) or die(pg_last_error());

        if(pg_num_rows($results) > 0){
            $this->geraSessao($this);
            return true;
        }
        else{
            return false;
        }
    }

    function geraSessao($user){
        session_start();
        $_SESSION['user'];
    }
}
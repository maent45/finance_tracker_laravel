<?php
/**
 * Created by PhpStorm.
 * User: 21103436
 * Date: 14/09/2015
 * Time: 2:06 PM
 */

//include the admin class first
include "Admin.php";

$name = $_POST["userEmail"];
$pass = $_POST["userPassword"];

var $usuario = new Admin($name, $pass);

if (usuario->authentication()) {
    header("location:principal.php");
}
 else {
    header("location:login.php");
}
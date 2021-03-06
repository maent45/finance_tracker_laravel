<?php
/**
 * Created by PhpStorm.
 * User: 21103436
 * Date: 14/09/2015
 * Time: 2:20 AM
 */

//require the db connection
$connection_string = "dbname=TestDB user=postgres password=root";

$db_connection = pg_connect($connection_string);

if(isset($_POST['submitNewUserInfo'])){

    $userID = ($_POST["userId"]);
    $user_name = pg_escape_string($_POST["userName"]);
    $user_pass = pg_escape_string($_POST["userPass"]);

    //add user insert query
    $addUserQuery = "insert into users (id, user_name, user_password) values ('" . $userID . "' , '" . $user_name . "' , '" . $user_pass . "')";

    //pass the query
    $result = pg_query($db_connection, $addUserQuery);

    //check if query works
    if (!$result){
        $error_mssg = pg_last_error();
        //echo out the error message
        echo "Error with query: " . $error_mssg;
        exit();
    }

    header("Location: login.php");
    //print query for testing
    //print_r("The inserted values were: " , $userfname, $userlname);
}

//close the db connection
pg_close();
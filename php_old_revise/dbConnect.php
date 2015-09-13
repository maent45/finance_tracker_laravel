<?php
/**
 * Created by PhpStorm.
 * User: 21103436
 * Date: 14/09/2015
 * Time: 2:00 AM
 */

//create connection string
$connection_string = "dbname=TestDB user=postgres password=root";

$db_conn = pg_connect($connection_string);

//if connection fails echo out error
if (!$db_conn){
    die("<h1>Error connecting: </h1>" . pg_last_error());
}

//close the connection
pg_close($db_conn);

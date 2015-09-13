<?php
/**
 * Created by PhpStorm.
 * User: 21103436
 * Date: 14/09/2015
 * Time: 2:04 AM
 */

//include the db connection file
include("dbConnect.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

<!-- login form -->
<div class="container">
    <div class="col-lg-12" style="margin-top: 5%;">
        <div class="form-group">
            <label for="usr">Email:</label>
            <input type="text" class="form-control" id="usr" name="userEmail">
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" name="userPassword">
        </div>
        <button class="btn btn-info">Login</button>
    </div>
</div>

<!-- scripts -->
<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
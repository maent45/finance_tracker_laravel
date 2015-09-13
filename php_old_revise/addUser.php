<?php
/**
 * Created by PhpStorm.
 * User: 21103436
 * Date: 14/09/2015
 * Time: 2:14 AM
 */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

<!-- add new user form -->
<div class="container">
    <div class="col-lg-12" style="margin-top: 5%;">
        <h1>Add New User:</h1>

        <form action="createUser.php" method="post">
            <div class="form-group">
                <label for="usr">ID:</label>
                <input type="text" class="form-control" id="usr" name="userId">
            </div>
            <div class="form-group">
                <label for="usr">User First Name:</label>
                <input type="text" class="form-control" id="usr" name="userFName">
            </div>
            <div class="form-group">
                <label for="pwd">User Last Name:</label>
                <input type="password" class="form-control" id="pwd" name="userLName">
            </div>
            <button class="btn btn-info" type="submit" name="submitNewUserInfo">Add User</button>
        </form>

    </div>
</div>

<!-- scripts -->
<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>

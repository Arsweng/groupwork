<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form class="form my-5 mx-5" method="post">
                <div class="mb-3">
                    <label class="form-label">first Names</label>
                    <input type="text" class="form-control" name="firstname">
                </div>
                <div class="mb-3">
                    <label class="form-label">last Names</label>
                    <input type="text" class="form-control" name="lastname">
                </div>
                <div class="mb-3">
                    <label class="form-label">birth date</label>
                    <input type="date" class="form-control" name="dob">
                </div>
                <div class="mb-3">
                    <label class="form-label">Phone Number</label>
                    <input type="text" class="form-control" name="number">
                </div>
                <div class="mb-3">
                    <label class="form-label" >Email address</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label" >Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                <button class="btn btn-danger"><a href="index.php" class = "link-light link-underline-opacity-0 mx-1">cancel</a></button>
        </form>
</body>
</html>
<?php
include "connection.php";

if ($_POST) {
    # code...
    $firstname = $_POST['firstname'];
    $username = $_POST['username'];
    $lastname = $_POST['lastname'];
    $date = $_POST['date'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $number = $_POST['number'];
    $sql = mysqli_query($con,"INSERT INTO clients VALUES('','$firstname','$lastname','$username','$email','$number','$password','$date')");
    if($sql){
        header("location: login.php");
    }
} 

?>

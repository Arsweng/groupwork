<?php
include "connection.php";
$id = $_GET['id'];
$sql = mysqli_query($con,"select * from clients where id=$id");
$row=mysqli_fetch_assoc($sql);
    $username = $row['username'];
    $id = $_GET['id'];
    $phone = $row['phone'];
    $email = $row['email'];
    $firstname = $row['firstname'];
    $lastname = $row['lastname'];
    $date = $row['date'];
    $password = $row['password'];
if (isset($_POST['submit'])) {
    $username = $_POST['name'];
    $email = $_POST['email'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $date = $_POST['date'];
    $password = $_POST['password'];
    $number = $_POST['number'];    
    $sql = mysqli_query($con,"UPDATE clients set username = '$username',email = '$email',phone = '$phone',lastname = '$lastname',date = '$date',firstname = '$firstname',password = '$password' where id=$id");
    if($sql){
        header("location: index.php");
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="http://127.0.0.1:5500/css/bootstrapmin.css">
    <link rel="stylesheet" href="bootstrapstyle.css">
</head>
<body>

        <form class="form my-5 mx-5" method="post">
                <div class="mb-3">
                    <label  class="form-label">Names</label>
                    <input type="text" class="form-control" value = "<?php echo $username ; ?>" name="name">
                </div>
                <div class="mb-3">
                    <label  class="form-label">Phone Number</label>
                    <input type="text" class="form-control" value = "<?php echo $phone ;?>" name="number">
                </div>
                <div class="mb-3">
                    <label  class="form-label" >Email address</label>
                    <input type="email" value = "<?php echo  $email;?>" name="email" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label" >Password</label>
                    <input type="password" class="form-control" value = "<?php echo $password; ?>" name="password">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">UPDATE</button>
        </form>
</body>
</html>

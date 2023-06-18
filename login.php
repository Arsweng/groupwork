<?php
include "connection.php";


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>login</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='bootstrapstyle.css'>
</head>
<body>
<form class="form my-5 mx-5" method="post">
                <div class="mb-3">
                    <label class="form-label" >Email address</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label" >Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>

<?php
if ($_POST) {
    # code...
    $password = $_POST['password'];
    $email = $_POST['email'];
    $sql = mysqli_query($con,"SELECT * FROM clients");
    if ($sql) {
        # code...
        while ($row = mysqli_fetch_assoc($sql)) {
            # code...
            if($password == $row['password'] && $email == $row['email']){
                header("location: index.php");
            }
        }
    }
}
?>
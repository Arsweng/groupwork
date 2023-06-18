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
<body class="bg-dark">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
<div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="../R.jpg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
      Arsweng
    </a>
  </div>
  <div class="container-fluid">
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
        <a href="addUser.php" class="nav-link active">Add User</a>
        </li>
        
        
      </ul>
    </div>
  </div>
</nav>
    <div class="container my-5">
  

        <table class="table table-dark table-striped table-hover table-dark">
  
        <tr class="table-dark">
      <th>id</th>
      <th>Name</th>
      <th>Number</th>
      <th>Email</th>
      <th>Password</th>
      <th>Actions</th>
    </tr>
 
  
    <?php

include  "connection.php";
$sql= mysqli_query($con,"SELECT * FROM clients");
if ($sql) {
 
 
  while ($row=mysqli_fetch_assoc($sql)) {
    
    $id = $row['id'];
    $username = $row['username'];
    $phone = $row['phone'];
    $email = $row['email'];
    $password = $row['password'];
    echo "<tr class='table-secondary'>
      <td>$id</td>
      <td>$username</td>
      <td>$phone</td>
      <td>$email</td>
      <td>$password</td>
      <td>
      <a class = 'btn btn-danger' href='delete.php?id=$row[id]' >delete</a>
      <a class = 'btn btn-info' href='update.php?id=$row[id]' >Edit</a>

      </td>
      </tr>";
  }
  
}
      
    ?>
    
</table>
    </div>
</body>
</html>
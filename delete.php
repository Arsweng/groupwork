<?php
    include "connection.php";
    if (isset($_GET['id'])) {
        $sql =  mysqli_query($con,"DELETE FROM clients WHERE id = $_GET[id]");
        if($sql){
            header("location: index.php");
        }
    }

?>
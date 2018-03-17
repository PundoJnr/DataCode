<?php
    //connect
    $conn = mysqli_connect('localhost','root','','data');

    //from html

    $id = mysqli_real_escape_string($conn, $_REQUEST['id']);

    //get data
    $sql = "SELECT * FROM users WHERE id == '".$id."'";
    $data = mysqli_query($conn,$sql) or die('error!');  


  
    
?>
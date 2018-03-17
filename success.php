<?php
    //connect
    $conn = mysqli_connect('localhost','root','','data');

    if($conn == false){
        die ("no connection" .mysql_connect_error());
    }

    $id = mysqli_real_escape_string($conn, $_REQUEST['id']);

    //get data
    $sql = "SELECT * FROM users WHERE Id_number== '".$id."";
    $data = mysqli_query($conn,$sql);
    
    if($data){
        echo"<input type='text' value='$name' name='name'>";
    }else{
        echo("can't" . mysql_error());
    }   
?>
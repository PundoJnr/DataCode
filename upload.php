<?php


  

        
        //connect
        $con = mysqli_connect("localhost", "root", "", "data");
        //check connection
        if($con === false){
            die("Couldnt connect." . mysqli_connect_error());
        }else{
            echo"successful connection";
        }
        $names = mysqli_real_escape_string($con, $_REQUEST['name']);
        $id = mysqli_real_escape_string($con, $_REQUEST['id']);
        $email = mysqli_real_escape_string($con, $_REQUEST['email']);
        $password = mysqli_real_escape_string($con,$_REQUEST ['psswd']);
        
        $sql = "INSERT INTO users (names,id,email,pasword)
                    VALUES('$names','$id','$email','$password')";

        if(mysqli_query($con,$sql)){
            echo "Successful Registration";
        }else{
            echo"Couldnt not add record" . mysqli_error($con);
        }


    
?>
<?php
ob_start();
$target_Folder = "img/";

$uid = $_POST['id'];

$target_Path = $target_Folder.basename( $_FILES['uploadimage']['name'] );

$savepath = $target_Path.basename( $_FILES['uploadimage']['name'] );

    $file_name = $_FILES['uploadimage']['name'];

    if(file_exists('upload/'.$file_name))
{
    echo "That File Already Exisit";
    }
    else
    {
        
        //connect
        $con = mysqli_connect('localhost','leja567_brianokinyi','ZP97v3[GjqRT','leja567_datacode');
        //check connection
        if($con === false){
            die("Couldnt connect." . mysqli_connect_error());
        }
        $names = mysqli_real_escape_string($con, $_REQUEST['name']);
        $id = mysqli_real_escape_string($con, $_REQUEST['id']);
        $email = mysqli_real_escape_string($con, $_REQUEST['email']);
        $password = mysqli_real_escape_string($con,$_REQUEST ['psswd']);
        
        $sql = "INSERT INTO users (Id_number,names,desig,pf_no,image)
                    VALUES('$id','$names','$email','$password','$target_Folder$file_name')";

        if(mysqli_query($con,$sql)){
            echo "Successful Registration";
        }else{
            echo"Couldnt not add record" . mysqli_error($con);
        }

            //move to upload folder
            move_uploaded_file( $_FILES['uploadimage']['tmp_name'],     $target_Path );
   
            header("location:http://nyeri.leja.co.ke/succes.html");


    } 
?>
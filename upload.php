<?php
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

        // Database 
    $con=mysqli_connect("localhost","root","","data"); //Change it if required

//Check Connection
        if(mysqli_connect_errno())
        {
            echo "Failed to connect to database" .     mysqli_connect_errno();
        }

        $sql = "INSERT INTO image (id,image, image_name)
                    VALUES     ('','$target_Folder$file_name','$file_name') ";

        if (!mysqli_query($con,$sql))
        {
            die('Error: ' . mysqli_error($con));
        }
        echo "1 record added successfully in the database";
        echo '<br />';
        mysqli_close($con);

        // Move the file into UPLOAD folder

        move_uploaded_file( $_FILES['uploadimage']['tmp_name'],     $target_Path );

        echo "File Uploaded <br />";
        echo 'File Successfully Uploaded to:&nbsp;' . $target_Path;
        echo '<br />';  
        echo 'File Name:&nbsp;' . $_FILES['uploadimage']['name'];
        echo'<br />';
        echo 'File Type:&nbsp;' . $_FILES['uploadimage']['type'];
        echo'<br />';
        echo 'File Size:&nbsp;' . $_FILES['uploadimage']['size'];

    }
?>

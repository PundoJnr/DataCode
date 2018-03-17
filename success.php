<?php
    //connect
    $conn = mysqli_connect('localhost','root','','data');

    if($conn == false){
        die ("no connection" .mysql_connect_error());
    }

    $id = mysqli_real_escape_string($conn, $_REQUEST['id']);

    //get data
    $sql = "SELECT * FROM users WHERE Id_number = '$id'";
    $data = mysqli_query($conn,$sql);
    
    if($data){
        $row = $data->fetch_assoc();
        $name = $row['names'];
    }else{
        echo("can't" . mysql_error());
    }
    
    
?>
    <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Data-Code</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/solid.js" integrity="sha384-+Ga2s7YBbhOD6nie0DzrZpJes+b2K1xkpKxTFFcx59QmVPaSA8c7pycsNaFwUK6l" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>
    <script defer src="js/src/fontawesome.all.js"></script>  
    </head>
    <body class="container">
    <nav style="background:purple;" class="text-center navbar ">
        <a class="navbar-brand" href="home.html" style="color:orange;">Data-Code</a>
    </nav>
<br>
<br>

    <div class="container text-center jumbotron">
        <div class="">
            <div><img src="img/<?php echo $row['image_name'] ?>" alt="No Image" class="rounded-circle" width="200px" height="200px"></div>
        </div>
        <div>
            <h4><?php echo $row['names'] ?></h4>
            <p>ID:  <i class="fas fa-id-card"></i> <?php echo $row['Id_number'] ?></p>
            <p>Email:  <i class="fas fa-envelope"></i> <?php echo $row['email'] ?></p>
            <p>
                <?php
                    $text = "$row[Id_number] $row[names] $row[email]";
                    $text = "poline";
                    $code ="Code128";
                    $orientation = "horizontal";
                    $print = true;
                    $size = 80; 
                    echo 
                        '<img 
                            class="barcode" 
                            alt="Barcode" 
                            src="barcode.php?text='.$row['names'].$row['Id_number'].'&codetype='.$code.'&orientation='.$orientation.'&size='.$size.'&print='.$print.'"/>';
                ?>
            </p>
        </div>
    </div>


    <footer id="footer" class="navbar container " style="background-color: purple; position: fixed; bottom:0px;">
        <div style="color:orange"> &copy; 2018 </div>
    </footer>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>

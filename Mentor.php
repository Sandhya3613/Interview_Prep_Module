<!DOCTYPE html>
<html lang="en">
<head>
   <?php
    include 'student_register.php';
    include 'mentor_register.php'; 
    include 'login.php';
    include 'navbar.php';
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="CSS/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet" />
    <link href="CSS/f.css"  rel="stylesheet" >

    <title>Mentor Profile | CareerTime</title>

    <style>
        .btn a{ 
        padding: 12px 30px; 
        border: 4px; 
        outline: none;
        text-transform: uppercase;
        font-size: 18px;
        font-weight: 600;  
        text-decoration: none;    
        letter-spacing: 1px; 
        font-family: "Muli" , serif; 
        cursor: pointer; 
        } 

        .btntwo{ 
        background: #00CED1;
        color: white;  
        } 
        .btn {
        position: fixed;
        margin-top: 50px;
        margin-left: 600px;
        } 
        .btntwo:hover{ 
            background: black;
            color: white;
        }
        .back{
            width:100%;
            height:800px;
            background-image: url('https://wallpaperaccess.com/full/3915854.jpg');
        }
        
    </style>
</head>
<body>
    

<?php
  ob_start();

  $db = mysqli_connect("localhost","root","","ct");
  $sql = "SELECT * FROM mentor_reg" ;

  $result1 =mysqli_query($db,$sql);

  while($data = mysqli_fetch_array($result1))
{
	
	?>
	
<img src="mentor/<?php echo $data['profile']; ?>" style ='margin-left:90px; margin-top:70px;' height="450px" width="380px">

<?php
}

?>

    <div class="back" style="">
        
            <div class="btn">
                <a href="Post_Content.php" class="btntwo">Post my content</a>  
            </div><br><br><br><br><br><br><br>
    <div>    
        <?php
        include 'footer.php';
        ?>
        <script type="text/javascript" src="JS/jquery.js"></script>
        <script type="text/javascript" src="JS/bootstrap.min.js"></script>
       
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width , initial-scale=1">
    <link href="CSS/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet" />
    <link href="CSS/index.css"  rel="stylesheet" >
    <link href="CSS/footer.css"  rel="stylesheet" >

    <title>Welcome | CareerTime</title>
    <style>
      *{
    margin: 0;
    padding: 0;
    outline: none;
    box-sizing: border-box;
    list-style: none;
    text-decoration: none;
  }
  .banner {
    position: absolute;
    top: 30%;
    left: 15%;
    
  }
  .banner h1  {
    color: #fff;
    animation: moveBanner 1s 0.5s forwards; 
          
  }
  .banner p{
    color: #fff;
    animation: moveBanner 1s 0.7s forwards;  
  }
  .banner a{ 
    padding: 12px 30px; 
    border: 4px; 
    outline: none;
    text-transform: uppercase;
    font-size: 15px;
    font-weight: 500;  
    text-decoration: none;    
    letter-spacing: 1px; 
    font-family: "Muli" , serif; 
    cursor: pointer; 
    opacity: 0; 
    animation: moveBanner 1s 0.9s forwards ;
    
  }
  .btntwo{ 
    background: #00CED1;
    color: white;
    opacity: 0;
    animation: movebanner 1s 0.9s forwards;  
  }
  @keyframes moveBanner {
    0% {
      transform: translateY(40rem) rotateY(-20deg);
    }
    100% {
      transform: translateY(0) rotateY(0);
      opacity: 1;
    }
  }
  .img-wrapper {
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.8);
    overflow: hidden;   
  }
 
  .img-wrapper img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    opacity: 0.5;
    animation: scale 25s;   
  }
  @keyframes scale {
    0% {
      transform: scale(1.3);
    }
    100% {
      transform: scale(1);
    }
  }
  .start {
    width: 100%;
    height: 128vh;
    position: relative;
    perspective: 100rem;
    overflow: hidden;        
  }
    </style>
</head>
<body>
<?php
    include 'student_register.php';
    include 'mentor_register.php'; 
    include 'login.php';
    include 'navbar.php';
    ?>
      <!--slider -->
      <div>
      <header class="start">
        <div class="img-wrapper">
          <img src="../CareerTime/IMG/bg1.jpg"/>
        </div>
        <div class="banner">
          <h1>We are commited to helping you reach your potential.</h1>
          <p>The best preparation for tomorrow is doing your best today.</p>  
           
          <a href="Practice.php" class="btntwo">Practice Now!</a>
        </div>
      </header>
    </div>

    <?php
    include 'footer.php';
    ?>
    <script type="text/javascript" src="JS/jquery.js"></script>
    <script type="text/javascript" src="JS/bootstrap.min.js"></script>
    


</body>
</html>

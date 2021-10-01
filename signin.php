
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="source/signin.css"/>
    <title>signin</title>
</head>
<body>
<div class="continer-fulid">
    <div class="signin col-lg-6 col-md-6 col-sm-12 ">
        <form  method="post" >
           <h3>sign-in</h3>
           <lable>Enter the name</lable>
           <input type="text" placeholder="Enter the name" required autocomplete="off" name="name" id="name"/>
           <lable>Enter the password</lable>
           <input type="text" placeholder="Enter the password"  autocomplete="off" name="pwd" id="pwd"/>
           <button id="btn" name="btn">sign-in</button>
           <div id="a"> <p>Don't have account</p>
       <a  href="index.php"id="sig">Register</a></div>
         </form>
         
    </div>
        <div class=" col-lg-6 col-md-6 col-sm-12 ">
           <img  class="img img-responsive"src="source/img/img1.png"  />
        </div>
    
</div>
</body>
</html>
<?php
include "dbconn.php";



if($btn=isset($_POST['btn'])){
    if($name=isset($_POST['name'])){
        $name=$_POST['name'];
    };
    if($pwd=isset($_POST['pwd'])){
        $pwd=$_POST['pwd'];
    };
    $sql="SELECT * FROM user WHERE username='$name' AND password='$pwd'";
    $res=$con->query($sql);
    if($res->num_rows==1){
        header("location:home.php");
        $_SESSION["name"]=$name;
        
    }
    else{
        echo"<h3> invalid uaername and password</h3>";
    }
      
    }

?>
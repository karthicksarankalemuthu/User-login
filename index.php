<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <link rel="stylesheet"  href="source/style.css"/>
    <title>Register</title>
</head>
<body>
   <div class="continer-fulid">
       <div  class="signin col-lg-6 col-md-6 col-sm-12 ">
           
           <form   method="post"  >
           <h3>Register</h3>
           <lable>Enter the name</lable>
           <input type="text" placeholder="Enter the name"class="form-control" required autocomplete="off" name="name" id="name"/>
           <lable>Enter the email</lable>
           <input type="email" placeholder="Enter the email"class="form-control" autocomplete="off" name="email" id="email"/>
           <lable>Enter the mobilenumber</lable>
           <input type="text" placeholder="Enter the number" class="form-control" autocomplete="off" name="phonenumber"id="number"/> 
           <lable>Enter the password</lable>
           <input type="text" placeholder="Enter the password" class="form-control" autocomplete="off"name="passwrd" id="pwd"/>
           <lable>Enter the confirm password</lable>
           <input type="text" placeholder="Enter the confirm password" class="form-control"  autocomplete="off" id="conpwd"/>
           <p id="err"></p>
           <button id="btn" name="btn">Register</button>
          <div id="a"> <p>already have account</p>
       <a  href="signin.php"id="sig">sign-in</a></div>
       </form>
       </div> 
       <div class=" col-lg-6 col-md-6 col-sm-12 ">
           <img  class="img img-responsive"src="source/img/img1.png"  width="950px"alt=""/>
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
 if($email=isset($_POST['email'])){
    $email=$_POST['email'];
 };
 if($phone=isset($_POST['phonenumber'])){
    $phone=$_POST['phonenumber'];
 };
 if($pwd=isset($_POST['passwrd'])){
    $pwd=$_POST['passwrd'];
};

$sql="INSERT INTO  user (username,email,phonenumber,password) VALUES('$name','$email','$phone','$pwd')";
 $res=mysqli_query($con,$sql);
 if($res){
     header("location:signin.php");}
 else{
     header("location:index.php");
 };
};
?>

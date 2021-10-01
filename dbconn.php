<?php
 $con=new mysqli("localhost","root","","register");
 if($con){
     #echo"database connected successfully";
 }
 else{
   echo "connection filed";
 }

?>
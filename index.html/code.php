<?php
       if(isset($_POST['create'])){
       $firstname=$_POST['firstname'];
       $lastname=$_POST['lastname'];
       $email=$_POST['email'];
       $phonenumber=$_POST['phonenumber'];
       $password=$_POST['password'];
    
       include("connection.php");
       $query="insert into user(firstname,lastname,email,phonenumber,password) values ('$firstname','$lastname','$email','$phonenumber','$password')";
       mysqli_query($con,$query);
       header("Location:login.php");    
    }
?>





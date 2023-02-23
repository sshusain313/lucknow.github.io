<?php
       
    
?>
<!DOCTYPE html>
<html>
    <head>
        <title>user registration | php</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">    
</head>
<body>
    
    <div>
        <form action="code.php" method="post">
            <div class="container">
              <div class="row">
                <div class="col-sm-3">
                <h1>registration</h1>
                <p>fill in the above form</p>
                <label for="firstname"><b>Fist Name</b></label>
                <input class="form-control" type="text" name="firstname" required>
                <label for="lastname"><b>last Name</b></label>
                <input class="form-control" type="text" name="lastname" required>
                <label for="email"><b>Email Address</b></label>
                <input class="form-control" type="email" name="email" required>
                <label for="phonenumber"><b>Phone Number</b></label>
                <input class="form-control" type="text" name="phonenumber" required>
                <label for="password"><b>Password</b></label>
                <input class="form-control" type="password" name="password" required>
                <hr class="mb-3">
                <input class="btn btn-primary" type="submit" name="create" value="signup">
              </div>
            </div>
           </div>
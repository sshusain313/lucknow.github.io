<?php

?>
<html>
<head>
<style>
body
{
background-color:green;
}
#outer
{
height:1200px;
width:1000px;
//border:1px solid white;
margin:0px auto;
}
#menu
{
height:50px;
width:1000px;
background-color:white;
border-radius:20px 20px 0px 0px;
border:1px solid white;
}
#menu ul
{
list-style-type:none;
}
#menu ul li
{
display:inline;
//border:1px solid;
padding:15px;
}
#menu ul li a
{
color:green;
text-decoration:none;
}





#slider
{
height:250px;
width:1000px;
background-color:white;
margin-top:5px;

}
#left
{
height:600px;
width:700px;
background-color:white;
float:left;
border-radius:0px 0px 0px 20px;
}
#right
{
height:600px;
width:300px;
background-color:lightgrey;
float:right;
border-radius:0px 0px 20px 0px;
}
#papa
{
height:600px;
width:1000px;
//background-color:pink;
margin-top:5px;
}
#footer
{
height:270px;
width:1000px;
background-color:white;
border-radius:20px;
margin-top:20px;
border:1px solid white;
}
.one
{
height:240px;
width:310px;
border:1px solid;
margin-left:15px;
margin-top:15px;
float:left;
}
</style>
</head>
<body>
<div id="outer">
<div id="menu">

<ul>
<li><a href="index.html">HOME</a></li>
<li><a href="about.html">ABOUT</a></li>
<li><a href="register.php">REGISTER</a></li>
<li><a href="login.php">LOGIN</a></li>
<li><a href="show.php">SHOW ALL</a></li>
</ul>

</div>
<div id="slider">
</div>
<div id="papa">
<div id="left">
<h1>Login Page</h1>
<form action="logcode.php" method="post">
Email
<input type="email" name="email"/>
<br/>
Password
<input type="password" name="pass"/>
<br/>
<br/>
<input type="Submit" value="Login"/>
</form>
</div>
<div id="right"></div>
</div>
<div id="footer">
<div class="one"></div>
<div class="one"></div>
<div class="one"></div>
</div>
</div>
</body>
</html>








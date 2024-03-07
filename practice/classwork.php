<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
<h1 align="center">Login Page</h1>
 
<form method="get">
  <div>
          <label for="name">Name:</label>
          <input type="text" id="name">
        </div>
        <div>
          <label for="email">Email:</label>
          <input type="email" id="email">
        </div>
        <div>
          <label for="date">Date of birth:</label>
          <input type="number" id="date">
        </div>
ID: <input type="number" name="id"><br>
 
Pass: <input type="password" name="name"><br>
<button name="log">Login</button>
<button name="reg">Reg</button>
</form>
 
<?php
if(isset($_POST['log']))
{
  if(empty($_POST['id']))
  {
    echo " empty";
  }
  else
  {
    echo  "OK";
  }
}
elseif (isset($_POST['reg'])) 
{
   header("location:reg.php");
}
 
?>
 
 
<h4 style="color: green; background-color: rgb(255, 0, 0);">this is our first prog</h4>
 
<h4 style="border: 2px solid tomato;">this is our first prog</h4>
 
<marquee direction="left"><h4>this is our first prog</h4></marquee>
 
<h4>this <sup>is</sup> our first <sub>prog</sub></h4>
 
<h4 style="font-family: verdana; font-size: 100%;">this is our first prog</h4>
 
<img src="BAF.jpg" width="200" height="100">
<h4> &#128508;</h4>
 
 
</body>
</html>
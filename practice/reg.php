<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
</head>
<body>

<form method="post">
	<h1 align="center">REGISTRATION</h1>
	<fieldset>
		Name<br>
		<input type="text" name="name"><br>
		ID<br>
		<input type="text" name="id"><br>
		Email<br>
		<input type="email" name="email"><br>
		Pass<br>
		<input type="password" name="pass"><br><br>
		<button name="reg">Reg</button>
		<button name="log">Login</button>
		
	</fieldset>
</form>
<?php
if(isset($_POST['reg']))
{
  if((empty($_POST['name'])) OR (empty($_POST['id'])) OR (empty($_POST['email'])) OR (empty($_POST['pass'])))
  {
    echo " empty";
  }
  else
  {
    echo  "OK";
  }
}
elseif (isset($_POST['log'])) 
{
   header("location:login.php");
}
 
?>
</body>
</html>
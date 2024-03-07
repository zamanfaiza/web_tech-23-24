<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>

<form method="post">
	<h1 align="center">LOGIN</h1>
	<fieldset>
		ID<br>
		<input type="text" name="id"><br>
		Pass<br>
		<input type="password" name="pass"><br><br>
		<button name="log">Login</button>
		<button name="reg">Reg</button>
	</fieldset>
</form>
<?php
if(isset($_POST['log']))
{
  if((empty($_POST['id'])) OR (empty($_POST['pass'])))
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
</body>
</html>
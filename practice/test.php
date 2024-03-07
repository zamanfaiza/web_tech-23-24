<?php

$serverName = "localhost";
$userName = "root";
$password = "";
$DbName = "dump";

$conn = new mysqli($serverName,$userName,$password,$DbName);
$sql = "select * from test";
$result = mysqli_query($conn,$sql);

// Check if edit button was clicked//
if (isset($_GET['edit'])) 
{
    $id_1 = $_GET['edit'];
    $sql3 = "SELECT * FROM test WHERE ID = '$id_1'";
    $result3 = mysqli_query($conn, $sql3);

    if ($result3->num_rows > 0) 
    {
        $r2 =mysqli_fetch_assoc($result3);

        // Display edit form with existing values
        echo '<form method="POST" action="">
            <input type="hidden" name="id" value="' . $r2['ID'] . '">
            Name: <input type="text" name="name" value="' . $r2['NAME'] . '"><br>
            Email: <input type="email" name="email" value="' . $r2['EMAIL'] . '"><br>
            Pass: <input type="password" name="pass" value="' . $r2['PASS'] . '"><br>
            <button type="submit" name="update">Update</button>
        </form>';
    } 
   
}

// Check for edit form submission and update//
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $sqlu ="UPDATE test SET NAME='$name',EMAIL='$email', PASS='$pass' where id='$id'";

    mysqli_query($conn, $sqlu);
}
 
//delete operation// 
if (isset($_GET['delete']))
{
   $id= $_GET['delete'];
   $sql2="delete from test where id='$id'";
   mysqli_query($conn,$sql2);

 
}

//check field//
if (isset($_GET['btn']))
{
   if(empty($_GET['id'])|| empty($_GET['pass']) )
   {
      echo "Fill up the form";
   }
   else
   {
      $id2= $_GET['id'];
      $pass2=$_GET['pass'];
      $sql3="select * from test where id='$id2' and pass='$pass2'";
      $res3=mysqli_query($conn,$sql3);
      if($res3-> num_rows>0)
      {
         echo "Valid User";
      }
      else
      {
         echo "invalid";
      }
 
   }
}
?>

<<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
	<form>
	<table border="1">
	<tr>
		<th>ID</th>
		<th>NAME</th>
		<th>EMAIL</th>
		<th>PASS</th>
		<th colspan="2">Option</th>
	</tr>


<?php while($r = mysqli_fetch_assoc($result)){?>

	<tr>
		<td><?php echo $r["ID"] ?></td>
		<td><?php echo $r["NAME"] ?></td>
		<td><?php echo $r["EMAIL"] ?></td>
		<td><?php echo $r["PASS"] ?></td>
		<td><button name="edit" value="<?php echo $r["ID"] ?>">EDIT</button></td>
		<td><button name="delete" value="<?php echo $r["ID"] ?>">DELETE</button></td>


	</tr>

<?php } ?>

</table>
</form>

<form>
<h1>Login</h1>
   Id: <input type="text" name="id"><br>
   Pass: <input type="password" name="pass"><br>
<button value="btn" align="center">submit</button>
</form>

</body>
</html>







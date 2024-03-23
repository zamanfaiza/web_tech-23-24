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
            <table>
            <tr>
				<th colspan="2">
					Update
				</th>
			</tr>
            <tr>
            	<td>
            		Name:
            	</td>
            	<td>
             		<input type="text" name="name" value="' . $r2['NAME'] . '"><br>
            	</td>
            </tr>
            <tr>
            	<td>
            		Email:
            	</td>
            	<td>
              		<input type="email" name="email" value="' . $r2['EMAIL'] . '"><br>
           		</td>
            </tr>
             <tr>
            	<td>
            		Pass:
            	</td>
            	<td>
              		<input type="password" name="pass" value="' . $r2['PASS'] . '"><br>
           		</td>
            </tr>
            <tr>
            	<td>
            		<button type="submit" name="update">Update</button>
            	</td>
            </tr> 
            <tr>
            	<td>
            	</td>
            </tr> 
            <tr>
            	<td>
            	</td>
            </tr> 
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
   header("location:test.php");

 
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

//insert operation//

if(isset($_POST['reg'])){
    if(empty($_POST['id'])||empty($_POST['name'])||empty($_POST['email'])||empty($_POST['pass']))
    {
        echo "Fill up the form first";
    }
    else
    {
        $id=$_POST['id'];
        $name=$_POST['name'];
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        $sql="INSERT INTO test VALUES ('$id','$name','$email','$pass')";
        $res=mysqli_query($conn,$sql);
        header("location:test.php");
        if($res)
        {
            echo "Registration Done";
        }
 
    }
}
 
 
?>


<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
	<form>
	<table border="1">
		<tr>
				<th colspan="6">
					Database
				</th>
		</tr>
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

<br>

</form>

<form>
	<fieldset>
		<table>
			<tr>
				<td colspan="2">
					<h1>Login</h1>
				</td>
			</tr>
			<tr>
				<td>
					Id:
				</td>
				<td>
					<input type="text" name="id">
				</td>
			</tr>
			<tr>
				<td>
					Pass:
				</td>
				<td>
					<input type="password" name="pass">
				</td>
			</tr>
			<tr>
				<td>
					<button value="btn">submit</button>
				</td>
				
			</tr>

		</table>
	</fieldset>
</form>

<br>

<form method="post">
	<fieldset>
		<table>
			<tr>
				<td colspan="2">
					<h1>Registration</h1>
				</td>
			</tr>
			<tr>
				<td>
					ID:
				</td>
				<td>
					<input type="text" name="id"><br>
				</td>
			</tr>
			<tr>
				<td>
					Name:
				</td>
				<td>
					<input type="text" name="name"><br>
				</td>
			</tr>
			<tr>
				<td>
					Email:
				</td>
				<td>
					<input type="text" name="email"><br>
				</td>
			</tr>
			<tr>
				<td>
					Pass:
				</td>
				<td>
					<input type="password" name="pass"><br>
				</td>
			</tr>
			<tr>
				<td>
					<button name="reg">Add</button>
				</td>
			</tr>
		</table>
	</fieldset>
     
</form>

</body>
</html>







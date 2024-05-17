<?php
require_once('dbconnection.php');


function auth($id,$pass)
{
	$sql="select * from tour_guide where id='$id' and pass='$pass'";
	$con=conn();
	$res= mysqli_query($con,$sql);
	$row=mysqli_num_rows($res);
	if($row==1)
	{
		return true;
	}
	else
	{
		return false;
	}
}


function verify($email)
{
	$sql="select email from tour_guide where email='$email'";
	$con=conn();
	$res= mysqli_query($con,$sql);
	$row=mysqli_num_rows($res);
	if($row>0)
	{
		return true;
	}
	 
	else
	{
		return false;
	}
}


 ?>

<!-------------------------------------------- tour management ------------------------------------------>

<?php


function get_tourManagement()
{
	$con = conn();
	$sql = "SELECT * FROM tour_management ORDER BY 
  CASE 
    WHEN status = 'pending' THEN 1 
    ELSE 2 
  END,
  status ASC;";

	$result = $con->query($sql);
	return $result;
}

function get_tourManagement2()
{
	$con = conn();
	$sql = "SELECT * FROM tour_management where status = 'pending'";

	$result = $con->query($sql);
	return $result;
}

function send_update($status, $tourname)
{
	$con = conn();
	$sql = "UPDATE tour_management SET status='$status' WHERE tourname='$tourname'";
	$con->query($sql);
	$con->close();
	return true;
}

function detailsRequest($tourname)
{
	$con = conn();
	$sql = "SELECT * FROM tour_management where tourname = '$tourname'";

	$result = $con->query($sql);
	return $result;
}

function get_tourDetails($tourname)
{
	$con = conn();
	$sql = "SELECT * FROM tour_management where tourname = '$tourname'";
	$result = $con->query($sql);
	$row = $result->fetch_assoc();
	return $row;
}


?>

<!-- ---------------------------------profile -------------------------------------------------------->

<?php

function get_details_profile($username)
{
	$con = conn();
	$sql = "SELECT * FROM tour_guide where username = '$username'";

	$result = $con->query($sql);
	$row = $result->fetch_assoc();
	return $row;
}

function update_details_profile($username, $name, $email, $phone, $password, $image)
{
	$con = conn();
	$sql = "UPDATE tour_guide SET name='$name', email='$email', phone='$phone', pass='$password', img='$image' WHERE username='$username'";
	$con->query($sql);
	$con->close();
	return true;
}



?>
<!-- ---------------------------------upcoming tours-------------------------------------------------------->
<?php
function Upcoming_Tours()
{
	$sql="select Date,Time,Tour_Name,Location,Duration from upcoming_tours";
	$con=conn();
	$res= mysqli_query($con,$sql);
	return $res;
}

?>
<!-- ---------------------------------finance -------------------------------------------------------->
<?php
function finance()
{
	$sql="select Date,Description,Income from finance";
	$con=conn();
	$res= mysqli_query($con,$sql);
	return $res;
}
function Sum()
{
	$sql="select * from finance";
	$con=conn();
	$res= mysqli_query($con,$sql);
	return $res;
}

?>
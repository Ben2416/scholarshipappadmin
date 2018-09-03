<?php
include "connection.php";

if(isset($_POST['uid'])){
	$query = "SELECT * FROM users, scholarship_details WHERE users.user_id=".$_POST['uid']." AND users.user_id=scholarship_details.id ";
	$result = mysqli_query($con, $query) or die(mysqli_error($con));
	if($result){
		while($row = mysqli_fetch_assoc($result)){
			$rdata[] = $row;
		}
	}
	echo json_encode($rdata);
}
?>
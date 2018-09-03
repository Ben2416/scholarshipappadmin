<?php
include "connection.php";
//print_r($GLOBALS);
if(isset($_GET)){
	if($_GET['p'] == 'tr')
	$query = "SELECT * FROM scholarship_details";
	else if($_GET['p'] == 'tc')
	$query = "SELECT * FROM scholarship_details WHERE attestation='Attested'";
	else if($_GET['p'] == 'ti')
	$query = "SELECT * FROM scholarship_details WHERE attestation=''";
	else{ echo "Invalid";exit;}
	$result = mysqli_query($con, $query) or die(mysqli_error($con));
	if($result){
		echo "Total : ".mysqli_num_rows($result);
	}
	exit();
	//echo json_encode($rdata);
}
?>
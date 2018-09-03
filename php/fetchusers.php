<?php
include "connection.php";
//print_r($GLOBALS);
function appStatus($as){
	if($as == 'attested' || $as == "Attested")return "Complete";
	else return "Incomplete";
}
if(isset($_POST)){
	$query = "SELECT * FROM users, scholarship_details WHERE users.user_id=scholarship_details.id";
	$result = mysqli_query($con, $query) or die(mysqli_error($con));
	if($result){
		while($row = mysqli_fetch_assoc($result)){
			echo "<tr class='gradeX' style='cursor:pointer' onclick='location.href=\"profile.php?uid=".$row['user_id']."\"'>
                          <td class='aligncenter'><span class='center'>
                            <input type='checkbox' />
                          </span></td>
                            <td>".ucfirst(strtolower($row['firstname']))."</td>
                            <td>".ucfirst(strtolower($row['lastname']))."</td>
                            <td>".strtolower($row['email'])."</td>
                            <td class='center'>".$row['phone']."</td>
                            <td class='center'>".appStatus($row['attestation'])."</td>
                        </tr>";
			//$rdata[] = $row;
		}
	}
	//echo json_encode($rdata);
}
?>
<?php
include "connection.php";
//print_r($GLOBALS);

if(isset($_POST)){
	$query = "SELECT * FROM users, scholarship_details WHERE users.user_id=scholarship_details.id AND scholarship_details.attestation='Attested'";
	$result = mysqli_query($con, $query) or die(mysqli_error($con));
	if($result){
		while($row = mysqli_fetch_assoc($result)){
			echo "<tr class='gradeX' >
                          <td class='aligncenter'><span class='center'>
                            <input type='checkbox' />
                          </span></td>
						  <td>".ucwords(strtolower($row['student_id']))."</td>
                            <td>".ucfirst(strtolower($row['firstname']))." ".ucfirst(strtolower($row['lastname']))."</td>
                            <td>".ucwords(strtolower($row['email']))."</td>
                            <td class='center'>".$row['phone']."</td>
                           
							<td><a href='profile.php?uid=".$row['user_id']."'>View Details</a></td>
                        </tr>";
			//$rdata[] = $row;
		}
	}
	//echo json_encode($rdata);
}
?>
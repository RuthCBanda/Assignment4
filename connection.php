<?php

include ""
if (isset($_P0ST['uname']) && isset($_POST['pword'])){
	function validate($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	
	$uname = validate(_POST['uname']);
	$pword = validate(_P0ST['pword']);
	
	if (empty($uname)){
		header("Location: admin.php?error=Username is required");
		exit();
	}else if(empty($pass)){
		header("Location: admin.php?error=Password is required");
		exit();
	}else{
		$sql = "SELECT id, fullName, number, email, enquiry from enquiryinfo";
        $result = $conn-> query($sql);
		
		if($result-> num_rows>0){
	while($row = $result-> fetch_assoc()){
		echo "<tr><td>". $row["id"] ."</td><td>". $row["fullName"] ."</td><td>". $row["number"] ."</td><td>". $row["email"] ."</td><td>". $row["enquiry"] ."</td></tr>";
		}
		echo "</table>";
}
else{
	echo "0 result";
}
	}
}else{
	header("Location: admin.php");
	exit();
}


?>
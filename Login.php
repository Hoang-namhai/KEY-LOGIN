<?php
	$JDecode = json_decode(file_get_contents('php://input'),true);
	$get_pass = $JDecode['Password']; //Getting data from lua script
	$passwords = ['123', '5']; //All passwords (keys). You can add more
	//Checking for the presence of the entered password
	for($i = 0; $i < count($passwords); $i++) {
		//If the password does not match any of the existing ones
		if($get_pass == $passwords[$i]) {
			exit('Correct');
		}
	}
?>

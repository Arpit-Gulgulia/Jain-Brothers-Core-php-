<?php

session_start();

if (isset($_POST['login-submit'])) {
	
	include 'dbh.inc.php';

	$userEmail = mysqli_real_escape_string($conn, $_POST['emailaddress']);//It give security because getting data coming from post method may be malicious;
	$userPassword = mysqli_real_escape_string($conn, $_POST['pwd']);
	

	//Enter Handlers
	//Check if inputs are empty
	if (empty($userEmail) || empty($userPassword) ) {
		   header("Location: ../login.php?login=empty");
	       exit();
		
	} else {
          $sql = "SELECT * FROM users WHERE emailAddress='$userEmail'";  
          $result = mysqli_query($conn, $sql);
          $resultCheck = mysqli_num_rows($result);
          if ($resultCheck < 1 ) {
          	       header("Location: ../login.php?login=error");
	               exit();
          } else {
                  if ($row = mysqli_fetch_assoc($result)) { //Fetch a result row as an associative array:
                  	//Checking pssword enter is correct or not
                  	//De-hashing password
                  	$hashedPwdCheck = password_verify($userPassword, $row['password']);
                  	if ($hashedPwdCheck == false ) {
                  		header("Location: ../login.php?login=errorPasswordIncorrect");
	                    exit();
                  	}
                  	elseif ($hashedPwdCheck == true) {
                         // Log in the user
                  		$_SESSION['u_id'] =$row['idUsers'];
                  		$_SESSION['u_title'] =$row['titles'];
                  		$_SESSION['u_first'] =$row['firstName'];
                  		$_SESSION['u_last'] =$row['lastName'];
                  		$_SESSION['u_email'] =$row['emailAddress'];
                  		header("Location: ../../AccountSystem/account.php?login=success");
	                    exit();

                  	} //end of else
                  } //End of else
          } // End of else
	}//End of else

} else {
	header("Location: ../login.php?login=error");
	exit();
} //end of else


?>
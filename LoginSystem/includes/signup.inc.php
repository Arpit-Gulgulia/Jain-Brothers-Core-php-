<?php
session_start();
 //Check if user has clicked the signup Button 
if (isset($_POST['signup-submit'])) { //so that user can't go directly access to this page by giving path in url
	
	//Then we include database connection
	require 'dbh.inc.php';
    
    // getting All the Information that user has typed from signup form
    $userTitle = mysqli_real_escape_string($conn, $_POST['title']) ; //We can use $conn because wwe have included  dbh.inc.php
    $userFirstName = mysqli_real_escape_string($conn, $_POST['firstName']) ;
    $userLastName = mysqli_real_escape_string($conn, $_POST['lastName']) ;
    $userEmailaddress = mysqli_real_escape_string($conn, $_POST['emailaddress']) ;
    $userConfirmEmailAddress = mysqli_real_escape_string($conn, $_POST['confirmEmailAddress']) ;
    $userPassword = mysqli_real_escape_string($conn, $_POST['pwd']) ;
    $userConfirmPassword = mysqli_real_escape_string($conn, $_POST['confirmPwd']) ;
    
    //INSERT INTO foos (text) VALUES ("I'm a "foobar"")
//Now, where exactly does the string end? You may know, an SQL parser doesn't. Not only will this simply break this query, it can also be abused to inject SQL commands you didn't intend.

//mysql_real_escape_string makes sure such ambiguities do not occur by escaping characters which have special meaning to an SQL parser:

//mysql_real_escape_string($text)  =>  I\'m a \"foobar\"
//This becomes:

//INSERT INTO foos (text) VALUES ("I\'m a \"foobar\"")
//This makes the statement unambiguous and safe. The \ signals that the following character is not to be taken by its special meaning as string terminator. There are a few such characters that mysql_real_escape_string takes care of.


//Error Handlers
//Checkfor Empty fields
if (empty($userFirstName) || empty($userLastName) || empty($userEmailaddress) || empty($userConfirmEmailAddress) || empty($userPassword) || empty($userConfirmPassword) ) {
   	   header("Location: ../signup.php?signup=empty");
   	   exit();
     //The PHP empty function is used to determine if a variable is empty or not.
  	//It will return True if the given variable is empty and false if it exists
  	//These values are considered to be as an empty value:
     //  “” (an empty string), 0 (0 as an integer), 0.0 (0 as a float), “0” (0 as a string), NULL, FALSE, array() (an empty array).

   } else {
   	  //Check if input characters are valid (Only letters and white space allowed)
   	  if (!preg_match("/^[a-zA-Z ]*$/",$userFirstName) || !preg_match("/^[a-zA-Z ]*$/",$userLastName) ) { //The preg_match() function searches a string for pattern, returning true if the pattern exists, and false otherwise.
   	  	header("Location: ../signup.php?signup=invalid");
   	   exit();
   	  } else {
              //Check if Email is Valid
   	  	       if (!filter_var($userEmailaddress, FILTER_VALIDATE_EMAIL)) { //Always check error first
   	  	       	   header("Location: ../signup.php?signup=email");
   	               exit();
   	  	       }else {
                      //Check if Email already exist in database
   	  	       	       $sql = "SELECT * FROM users WHERE emailAddress='$userEmailaddress'";
   	  	       	       $result = mysqli_query($conn, $sql);
   	  	       	       $resultCheck = mysqli_num_rows($result);

   	  	       	       if ($resultCheck > 0) { //Email address is already register
                            $_SESSION['signup'] = "This Email is already taken!";
   	  	       	       	  header("Location: ../signup.php?signup=emailtaken");
   	  	       	       	  exit();
   	  	       	       } else {
                               //Hashing the password
   	  	       	       	        $hashedPwd = password_hash($userPassword, PASSWORD_DEFAULT);
   	  	       	       	        // Insert the user into Database
   	  	       	       	        $sql = "INSERT INTO users (titles, firstName, lastName, emailAddress, password) VALUES ('$userTitle', '$userFirstName', '$userLastName', '$userEmailaddress', '$hashedPwd');";
   	  	       	       	        $result = mysqli_query($conn, $sql);
   	  	       	       	        header("Location: ../login.php?signup=success");
   	  	       	       	        exit();
   	  	       	       } // End of else
   	  	       } // End of else
   	  } //End of else
 

   } //end of else
    

}else {
	header("Location:../signup.php?");
	exit();
}


?>
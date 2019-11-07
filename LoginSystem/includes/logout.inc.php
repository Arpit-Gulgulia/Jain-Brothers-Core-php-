<?php

if (isset($_POST['logout-submit'])) { //I still have to design logout button form
	 session_start();
	 session_unset();
	 session_destroy();
	 header("Location: ../login.php");
	 exit();
}

?>
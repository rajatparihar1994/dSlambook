<?php	
	
	if(isset($_GET['logout'])){
		logout();
	}
	function logout(){
		session_unset();
		header("location:login.php");
	}
?>
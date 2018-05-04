<?php
		session_start();
		$_SESSION['currentPage'] = "HomeController";
		$paramMenuItem = "transaction";
		if($_SESSION["adminFullName"]=="")
		{
			header('Location: LoginController.php');
			die();
		}
		
		
		
		include("../View/page/manageSysCustomer_page.php");
?>



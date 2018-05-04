<?php
		session_start();
		include("../Model/Bean/ManageSysClientBeanImpl.php");
		$_ManageSysClientBeanImpl = new ManageSysClientBeanImpl();
		$_SESSION['currentPage'] = "ManageSysCustomer";
		if($_SESSION["adminFullName"]=="")
		{
			header('Location: LoginController.php');
			die();
		}
		
		if(isset($_POST["requestProcess"]))
		{
			//$_SESSION["requestProcess"] = $_POST["requestProcess"];
			echo "im here";
			$_ManageSysClientBeanImpl->createSysCustomer($_POST["fullName_txt"], $_POST["contactNo_txt"], $_POST["address_txt"], $_POST["atmNo_txt"]);
			die();
		}
		$_rs = $_ManageSysClientBeanImpl->readSysCustomer();
		include("../View/page/ManageSysCustomer_page.php");
?>



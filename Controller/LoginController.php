<?php
		session_start();
		/*
		if($_SESSION["adminFullName"]!="")
		{
			header('Location: HomeController.php');
		}
		*/
		//include the BEANS
		include("../Model/Bean/LoginBeanImpl.php");
		$_LoginBeanImpl = new LoginBeanImpl();
		$_SESSION['currentPage'] = "LoginController";
		
		//if the user clicked log in
		if(isset($_POST["login_btn"]))
		{			
			$adminCredentials = $_LoginBeanImpl->readAdmin($_POST["userName_txt"], $_POST["passWord_txt"]);
			
			if($adminCredentials["isAdminValid"])
			{
				$_SESSION["adminFullName"] = $adminCredentials["adminFullName"];
				header('Location: ManageSysCustomerController.php');
			}
			
			else
			{
				echo "invalid po";
			}
		}
		
		//if log out button is clicked
		else
		{
			//$_SESSION["adminFullName"] = "";
		}
		
		//should include page in the last part
		include("../View/page/login_page.php");
?>



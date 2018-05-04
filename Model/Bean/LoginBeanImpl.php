<?php
	include("LoginBean.php");
	include("MySQLConnection.php");
	class LoginBeanImpl implements LoginBean
	{
		public function readAdmin($userName, $passWord)
		{
			global $myConn;
			$adminCredentials = array("adminFullName"=>"", "isAdminValid"=>false);
			$rs = $myConn->query("CALL read_sys_admin('".$userName."','".$passWord."')");
			//return ($rs->num_rows!=0) ? true : false;
			while($_rs = $rs->fetch_assoc())
			{
				$adminCredentials["adminFullName"] = $_rs["sa_fullname"];
				$adminCredentials["isAdminValid"] = true;
			}
			return $adminCredentials;
		}
	}
	
?>
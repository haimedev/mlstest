<?php
	include("ManageSysClientBean.php");
	include("MySQLConnection.php");
	class ManageSysClientBeanImpl implements ManageSysClientBean
	{
		public function readSysCustomer()
		{
			global $myConn;
			$rs = $myConn->query("CALL read_sys_customer()");
			//return ($rs->num_rows!=0) ? true : false;
			/*while($_rs = $rs->fetch_assoc())
			{
				$adminCredentials["adminFullName"] = $_rs["sa_fullname"];
				$adminCredentials["isAdminValid"] = true;
			}*/
			return $rs;
		}
		
		public function createSysCustomer($fullname, $contact_no, $address, $atm_no)
		{
			echo "im here in bean";
			global $myConn;
			$myConn->query("CALL create_sys_customer('".$fullname."','".$contact_no."','".$address."','".$atm_no."')");
		}
	}
	
?>















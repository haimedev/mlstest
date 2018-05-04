<?php
	interface ManageSysClientBean
	{
		public function readSysCustomer();
		public function createSysCustomer($fullname, $contact_no, $address, $atm_no);
	}
?>
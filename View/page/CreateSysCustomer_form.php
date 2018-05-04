<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../CSS/CreateSysCUstomer_form.css">
</head>
<body>
	<div id="create_div">
		<form method="post" action="../../Controller/ManageSysCustomerController.php" id="create_form">
			<table>
				<tr>
					<td><label>Full Name:</label></td>
					<td><input type="text" name="fullName_txt" id="fullName_txt"/></td>
				</tr>
				<tr>
					<td><label>Contact No.:</label></td>
					<td><input type="text" name="contactNo_txt" id="contactNo_txt"/></td>
				</tr>
				<tr>
					<td><label>Current Address:</label></td>
					<td><textarea rows="4" cols="30" name="address_txt" id="address_txt"></textarea></td>
				</tr>
				<tr>
					<td><label>ATM No.:</label></td>
					<td><input type="text" name="atmNo_txt" id="atmNo_txt"/></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="create_btn" id="create_btn" value="Create"/>
						<input type="reset" value="Reset"/>
					</td>
				</tr>
			</table>
			<input type="hidden" name="requestProcess" value="createSysCustomerqwe123"/>
		</form>
	</div>

	<script src="../JavaScript/jquery321.js"></script>
	<script src="../JavaScript/CreateSysCustomer_form.js"></script>
</body>
</html>
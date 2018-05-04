<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../view/CSS/login_page.css">
</head>
<body>
	<?php 
		include("pageHeader.php");
	?>
	<img src="../view/image/mls_background.png">
	<div id="loginForm_div">
		<form method="post" action="LoginController.php">
			<table>
				<tr>
					<td>Username</td>
				</tr>
				<tr>
					<td><input type="text" id="userName_txt" name="userName_txt" required/></td>
				</tr>
				<tr>
					<td>Password</td>
				</tr>
				<tr>
					<td><input type="password" id="passWord_txt" name="passWord_txt" required/></td>
				</tr>
				<tr>
					<td>
						<input type="submit" id="login_btn" name="login_btn" value="log In" required/>
						<input type="reset" id="clear_btn" name="clear_btn" value="Clear" required/>
					</td>
				</tr>
			</table>
		</form>
	</div>




</body>
</html>
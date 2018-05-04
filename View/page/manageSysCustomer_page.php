<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../view/CSS/menu_popage.css">
	<link rel="stylesheet" type="text/css" href="../view/CSS/ManageSysCustomer_page.css">
</head>
<body>
	<div id="wrapper">
		<?php 
		try
		{
			include("pageHeader.php");
			include("../View/page/menu_popage.php");
			
		}
		
		catch(Exception $e)
		{
			
		}
		/*
		while($tempRs = $_rs->fetch_assoc())
			{
				echo($tempRs["sc_fullname"]);
			}
			*/
		?>
		<div id="timeline_div">
			<input type="button" value="New Account" name="newAccount_btn" id="newAccount_btn"/>
			<div id="timelineTable_div">
				<table id="sysCustomer_tbl">	
					<tr style="line-height: 20px; height: 20px;">
						<th>
						Customer ID
						</th>
						<th>
						Full Name
						</th>
						<th>
						Contact No.
						</th>
						<th>
						Permanent Address
						</th>
						<th>
						ATM No.
						</th>
					</tr>
					<?php 
					while($tempRs = $_rs->fetch_assoc())
					{
						echo "<tr style=\"line-height: 20px; height: 20px;\">";
						echo "<td>".$tempRs["sc_id"]."</td>";
						echo "<td>".$tempRs["sc_fullname"]."</td>";
						echo "<td>".$tempRs["sc_contact_no"]."</td>";
						echo "<td>".$tempRs["sc_address"]."</td>";
						echo "<td>".$tempRs["sc_atm_no"]."</td>";
						echo "</tr>";
					}
					?>
				</table>
			</div>
			<div id="notificationArea_div">
			e
			</div>
		</div>
	</div>
	
	<script src="../View/JavaScript/jquery321.js"></script>
	<script src="../View/JavaScript/ManageSysCustomer_page.js"></script>

</body>
</html>
















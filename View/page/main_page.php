<?php
	$paramMenuItem = "manageClient";
	try
		{
			if(isset($_POST["paramMenuItem"]))
			{
				$paramMenuItem = explode("_", $_POST["paramMenuItem"], 2)[0];
			}
			
			else
			{
				
			}
		}
		
		catch(Exception $e)
		{
			
		}
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../view/CSS/menu_popage.css">
	<link rel="stylesheet" type="text/css" href="../view/CSS/<?php echo $paramMenuItem."_page.css";?>">
</head>
<body>
	<div id="wrapper">
		<?php 
		try
		{
			include("pageHeader.php");
			include("../View/page/menu_popage.php");
			include($paramMenuItem."_page.php");
		}
		
		catch(Exception $e)
		{
			
		}
		?>
	</div>
	
	<script src="../View/JavaScript/jquery321.js"></script>
	<script src="../View/JavaScript/main_page.js"></script>

</body>
</html>
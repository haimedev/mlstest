<?php 
	$myConn = new mysqli("localhost","root","Haimemysql1", "mls-v1");
		//public function __construct()
		//{
			
				//$myQuery = "CALL read_sys_admin(?,?)";
				//$myStmt = mysqli_prepare($myConn, $myQuery);
				//mysqli_stmt_bind_param($myStmt, 'ss', $userName, $passWord);
				//mysqli_stmt_execute($myStmt);
				//$result1 = mysqli_use_result($myConn);
				//while ($row = $result1->fetch_assoc()) 
				//{
				//	printf("%d\n", $row['id']);
				//}
				/*
				$result_set = $myConn->query("CALL read_sys_admin('".$userName."','".$passWord."')");
				while($row=$result_set->fetch_assoc())
				{
					$tempVar = "";
					echo $row["sa_fullname"]."<br>";
					echo $result_set->num_rows;
					($result_set->num_rows!=0) ? $tempVar="1" : $tempVar="2";
					echo "bket::".$tempVar;
				}
				*/
			
		//}
?>






















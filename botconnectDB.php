<?php
				$db_host ="31.220.58.64"; //"localhost";
				$db_user ="root2"; //"root";
				$db_pass ="root@vps"; //"administrator";
				$db_name ="mybook"; //"extensionchrome";
				
 				$conn=mysqli_connect($db_host,$db_user,$db_pass,$db_name);
 				mysqli_set_charset($conn, "utf8");
 				if(mysqli_connect_errno())
 				{
				echo 'is not can not DB: '.mysqli_connect_error();
				}else{
          echo 'Connected DB Mybook';
					
			mysqli_query("");		
					
        }




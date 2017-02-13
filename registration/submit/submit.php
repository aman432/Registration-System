<?php 
	
		
	session_start();
		
				
		require_once('../class/personal_profile.php');
		
		$obj = clone $_SESSION['transfer'];
		
			$host="localhost";
			$username="root";
			$password="";
			$database="testdb";
			
			mysql_connect($host,$username,$password);
			@mysql_select_db($database) or die( "Unable to select database");
			echo "<center><a href=\"../main/index.php\"><button>Back</button></a></center>";
			$query="select * from murious10_registrations where t_unique_id = '".$obj->uid."'";
			$run=mysql_query($query);
			if(mysql_num_rows($run)>0)
			{
				echo "<html>";
				echo "<body>";
				echo "<center><h1><B>You have already registered...</B></h1>";
				echo "Confirmation Email has already been sent to your registered Email id.<br><br>";
				echo "Your UDI is "; 
				echo $obj->uid;
				echo "</center>";
				echo "</body>";
				echo "</html>";
			}
			else
			{
			
				mysql_query("INSERT INTO murious10_registrations(t_unique_id,t_name,t_gender,t_college,t_id,t_email,t_unique_ri,t_event_id,t_event_name,t_team_player,t_team_details,t_event_cost,t_cost_status,t_mobile_no) 
				VALUES('$obj->uid','$obj->fullname','$obj->gender','$obj->cname','$obj->id','$obj->email','$obj->md5uri','$obj->eid','$obj->event','$obj->sizeofteam','$obj->team','$obj->cost','$obj->status','$obj->phone')") or die (mysql_error());
			
				echo "<html>";
				echo "<body>";
				echo "<center><h1>Thank You for Registering...</h1>";
				echo "Confirmation Email has been sent to your registered Email id.<br><br>";
				echo "Your UDI is "; 
				echo $obj->uid;
				echo "</center>";
				echo "</body>";
				echo "</html>";
			
			
			}
			
		
		


		//session_destroy();


?>
			
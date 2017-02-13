<?php 
  $host="localhost";
			$username="root";
			$password="";
			$database="testdb";
			
			mysql_connect($host,$username,$password);
			@mysql_select_db($database) or die( "Unable to select database");
			
?>
<?php $event = $_POST['opt']; ?>
<html lang="en">
	<head>
		<title>View</title>
		<link rel="stylesheet" href="form.css" />
	</head>
	
	<body>
		<center><h1><?php eventpr(); ?> (Paid)</h1></center>
	
		<table class="CSSTableGenerator">
			<tr>
				<th>Id</th>	<th>Name</th>	<th>Gender</th>	<th>College</th>	<th>Contact no.</th>
			</tr>
			<tr>
				<?php 
								
				$query="select * from murious10_registrations where t_cost_status = 'PAID' AND t_event_id = '".$event."'";
				$run=mysql_query($query);
				while ($row=mysql_fetch_array($run))
				{
					$id = $row[5];
					$name = $row[2];
					$gender= $row[3];
					$college = $row[4];
					$co_no = $row[14];				
				
				?>
				<td><?php echo $id; ?></td>
				<td><?php echo $name; ?></td>
				<td><?php echo $gender; ?></td>
				<td><?php echo $college; ?></td>
				<td><?php echo $co_no; ?></td>
					  
			</tr>
				<?php } ?>
				
				</table>
				
		<center><h1><?php eventpr(); ?> (Unpaid)</h1></center>
		
		
		<table class="CSSTableGenerator">
			<tr>
				<th>Id</th>	<th>Name</th>	<th>Gender</th>	<th>College</th>	<th>Contact no.</th>
			</tr>
			<tr>
				<?php 
								
				$query="select * from murious10_registrations where t_cost_status = 'UNPAID' AND t_event_id = '".$event."'";
				$run=mysql_query($query);
				while ($row=mysql_fetch_array($run))
				{
					$id = $row[5];
					$name = $row[2];
					$gender= $row[3];
					$college = $row[4];
					$co_no = $row[14];				
				
				?>
				<td><?php echo $id; ?></td>
				<td><?php echo $name; ?></td>
				<td><?php echo $gender; ?></td>
				<td><?php echo $college; ?></td>
				<td><?php echo $co_no; ?></td>
					  
			</tr>
				<?php } ?>
				
				</table>
				<br>
			
				<center><h1><?php eventpr(); ?> (Participant Details)</h1></center>
  <table class="CSSTableGenerator">
			<tr>
				<th>Paid entries</th>	<th>Unpaid entries</th>	<th>Total</th>
			</tr>
			<tr>
				<?php 
								
				
					$paid = mysql_query("SELECT COUNT(*) as total  FROM murious10_registrations where t_cost_status = 'PAID' AND t_event_id = '".$event."'");
					$unpaid = mysql_query("SELECT COUNT(*) as total FROM murious10_registrations where t_cost_status = 'UNPAID' AND t_event_id = '".$event."'");
					$total= mysql_query("SELECT COUNT(*) as total FROM murious10_registrations where t_event_id = '".$event."'");
					
					$row1 = mysql_fetch_assoc($paid);
$row2 = mysql_fetch_assoc($unpaid);
$row3 = mysql_fetch_assoc($total);					
				
				?>
				<td><?php echo $row1['total']; ?></td>
				<td><?php echo $row2['total']; ?></td>
				<td><?php echo $row2['total']; ?></td>
				
					  
			</tr>
				
				
				</table>
  <center><h1><?php eventpr(); ?> (Foreign Participant Details)</h1></center>
  <table class="CSSTableGenerator">
			<tr>
				<th>Paid entries</th>	<th>Unpaid entries</th>	<th>Total</th>
			</tr>
			<tr>
				<?php 
								
				
					$paid = mysql_query("SELECT COUNT(*) as total  FROM murious10_registrations where t_college!='JUIT' AND t_cost_status = 'PAID' AND t_event_id = '".$event."'");
					$unpaid = mysql_query("SELECT COUNT(*) as total FROM murious10_registrations where t_college!='JUIT' AND t_cost_status = 'UNPAID' AND t_event_id = '".$event."'");
					$total= mysql_query("SELECT COUNT(*) as total FROM murious10_registrations where t_college!='JUIT' AND t_event_id = '".$event."'");
					
					$row1 = mysql_fetch_assoc($paid);
$row2 = mysql_fetch_assoc($unpaid);
$row3 = mysql_fetch_assoc($total);					
				
				?>
				<td><?php echo $row1['total']; ?></td>
				<td><?php echo $row2['total']; ?></td>
				<td><?php echo $row2['total']; ?></td>
				
					  
			</tr>
				
				
				</table>
 <br>
	</body>
	<?php 

function eventpr(){
	$event = $_POST['opt'];
	if($event == 'e1')
		echo 'Blur';
	if($event == 'e2')
		echo 'Fifa';
	if($event == 'e3')
		echo 'Counter strike';
	if($event == 'e4')
		echo 'Call of duty';
	
	return;
}


?>
</html>

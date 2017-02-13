<?php
		session_start();
		
		require_once('../class/personal_profile.php');
		
		$obj = new profile();
		$obj->fullname=$_POST["name"];
		$obj->gender=$_POST["gender"];
		$obj->email=$_POST["email"];
		$obj->id=$_POST["id"];
		$obj->status="UNPAID";
		$obj->eid=$_POST["event"];
		$obj->uri=$_POST["uri"];
		$obj->encrypt_key($obj->uri);
		$obj->team=$_POST["team"];
		$obj->college_name_correction($_POST["college"],$_POST["other"]);
		$obj->define_event($_POST["event"]);
	
		$obj->team_display=$obj->set_team_display(array(","),$_POST["team"]);
		$obj->phone=$_POST["phone"];
		$obj->uri_creator();
					
		
		
		$_SESSION['transfer'] = $obj;
?>

<html>
<head>
    <title></title>
	<link rel="stylesheet" type="text/css" href="confirmation.css">
</head>

<body>

<h2><center>  Your Details</center></h2>
<table class="bordered">
    <thead>

    <tr>
        <th width="10%">#</th>        
        <th width="45%">Fields</th>
        <th width="45%">Value</th>
    </tr>
    </thead>
    <tr>
        <td>1</td>        
        <td>Name</td>

        <td><?=$obj->fullname?></td>
    </tr>        
    <tr>
        <td>2</td>         
        <td>Gender </td>
        <td><?=$obj->gender?></td>
    </tr>
    <tr>

        <td>3</td>         
        <td>Email</td>
        <td><?=$obj->email?></td>
    </tr>    
    <tr>
        <td>4</td> 
        <td>ID Number</td>
        <td><?=$obj->id?></td>

    </tr>
    <tr>
        <td>5</td> 
        <td>URI</td>
        <td><?=$obj->uri[0]?> _ <?=$obj->uri[2]?> _ <?=$obj->uri[4]?> _ <?=$obj->uri[6]?> _ <?=$obj->uri[8]?> _</td>
    </tr>
    <tr>
        <td>6</td> 
        <td>College Name</td>
        <td><?=$obj->cname?></td>
    </tr>
    <tr>
        <td>7</td> 
        <td>Event registered</td>
        <td><?=$obj->event?></td>
    </tr>
		
	<tr>
        <td>8</td> 
        <td>Team derails</td>
        <td>Number of members = <?=$obj->sizeofteam?> <br> <?=$obj->team?>
		</td>
	</tr>    	
    <tr>

        <td>9</td> 
        <td>Mobile Number</td>
        <td><?=$obj->phone?></td>
	</tr>
	<tr>
		<td>10</td>
		<td>Status</td>
		<td>Rs.<?=$obj->cost?> is unpaid.</td>
	</tr>
    
</table><br>
<br>

<input class="buttom" name="submit" id="submit" tabindex="5" value="Back" type="submit">
<input class="buttom" name="submit" id="submit" tabindex="5" value="Register" type="submit" onclick="location.href = '../submit/submit.php';">

<br>
    

</body>
</html>

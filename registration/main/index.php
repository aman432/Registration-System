			<!DOCTYPE html>
			<html>
			<head>
			<title>Register</title>
				<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7; IE=EmulateIE9">
				<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
				<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
				<link rel="stylesheet" type="text/css" href="style.css" media="all" />
				<link rel="stylesheet" type="text/css" href="demo.css" media="all" />
			</head>
			<body>
            <div class="container">
			<!-- freshdesignweb top bar -->
            <div class="freshdesignweb-top">
                <a href="" target="_blank">Home</a>
                <span class="right">
                    <a href="http://www.freshdesignweb.com/beautiful-registration-form-with-html5-and-css3.html">
                        
                    </a>
                </span>
                <div class="clr"></div>
            </div><!--/ freshdesignweb top bar -->
			<header>
				<h1><span></span> Register for Murious X</h1>
            </header>       
			<div  class="form">
    		  <form id="contactform" method="POST" action="../confirmation/confirmation.php"> 
    			<p class="contact"><label for="name">Name*</label></p> 
    			<input id="name" name="name" placeholder="First and last name"  tabindex="1" type="text" required > 
				
				 <select class="select-style gender" name="gender" required >
					<option value="">i am..*</option>
					<option value="male">Male</option>
					<option value="female">Female</option>
					<option value="other">Other</option>
				</select><br><br>
    			 
    			<p class="contact"><label for="email">Email*</label></p> 
    			<input id="email" name="email" placeholder="example@domain.com" type="email" required > 
                
                <p class="contact"><label for="username">ID Number*</label></p> 
    			<input id="username" name="id" placeholder="Enter your college roll number" tabindex="2" type="text" required> 
    			 
                <p class="contact"><label for="password">Create URI*</label></p> 
    			<input type="password" maxlength="10" minlength="10" id="password" name="uri" placeholder="Create a 10 character unique ID" required> 
        
             
                 <p class="contact"><label for="name">College Name*</label></p> 
                  <select class="select-style gender" name="college" >
						<option value="01">JUIT</option>
						<option value="02">Other</option>
              
                  </select>  <br><br>  
                
    			<input id="name" name="other" placeholder="if other" tabindex="1" type="text" > 
  
				<select class="select-style gender" name="event" required >
				<option value="">Events*</option>
				<option value="e1">E1</option>
				<option value="e2">E2</option>
				<option value="e3">E3</option>
				</select><br><br>
				
				<p class="contact"><label for="phone">Team Members (if team event)</label></p> 
				<input id="name" name="team" tabindex="1" type="text"  placeholder="member1(id_number),member2(id_number),..." ><br>
				
				<p class="contact"><label for="phone">Mobile phone(+91 -  )*</label></p> 
				<input id="phone" maxlength="10" minlength="10" name="phone" placeholder="phone number"  type="text" required> <br>
				
				<input id="name" tabindex="1" type="checkbox" required> I accept the terms and condition laid down by team CREATECH.<br>
				
				
				<input class="buttom" name="submit" id="submit" tabindex="5" value="Register" type="submit"> 	 
			    </form> 
			</div>      
			</div>

			</body>
			</html>

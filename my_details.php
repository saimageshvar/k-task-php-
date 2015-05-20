<html>
	<head>
		<title>Details</title>
	</head>
	
	<body style="font-family:verdana;color:black;text-shadow: 1px 1px #000000;margin:50px;">
		<?php
		
			//Removing whitespace and storing details
			
			$flag=true;
			$fname=rmv_ws($_POST["fname"]);
			$lname=rmv_ws($_POST["lname"]);
			$fa_name=rmv_ws($_POST["fathername"]);
			$gender=rmv_ws($_POST["gender"]);
			$age=rmv_ws($_POST["age"]);
			$dob=rmv_ws($_POST["dob"]);
			$email=rmv_ws($_POST["email"]);
			$address=$_POST["address"];
			$state=rmv_ws($_POST["state"]);
			$country=rmv_ws($_POST["country"]);
			$number=rmv_ws($_POST["ph_no"]);
			
			//Function for removing white space
			
			function rmv_ws($value)
			{
				global $flag;
				$value=trim($value);
				if($value=="" && $flag==true)
				{
					echo "You have entered a blank space.<br/><br/>";
					global $flag;
					$flag=false;
				}
				return $value;
			}
			
			//Validating fname,lname,email and mobile number
			
			
			
			if(!preg_match("/^[a-zA-Z]*$/",$fname))
			{
				echo "Invalid First Name.Only alphabets are allowed.<br/><br/>";
				$flag=false;
			}
			
			if(!preg_match("/^[a-zA-Z]*$/",$lname))
			{
				echo "Invalid Last Name.Only alphabets are allowed.<br/><br/>";
				$flag=false;
			}
			
			if(!preg_match("/^[0-9]*$/",$number))
			{
				echo "Invalid Mobile Number.Only numbers from 0 to 9 are allowed.<br/><br/>";
				$flag=false;
			}
			
			if(!filter_var($email,FILTER_VALIDATE_EMAIL))
			{
				echo "Invalid E-mail id.<br/><br/>";
				$flag=false;
				
			}
			
			if($flag==false)
			{
				echo "You are redirected to the index page";
				echo "<meta http-equiv='refresh' content='2;index.html'/>";
				
			}
			
			//Displaying
			if($flag==true)
			{
				echo "<table border='7' style='text-align:center;'> <tr> <th>First Name</th> <th>Last Name</th> <th>Father Name</th> <th>Gender</th> <th>age</th> <th>DOB</th> <th>email</th> <th>address</th> <th>state</th> <th>country</th> <th>mobile</th> </tr>";
			
				echo "<tr><td>$fname</td> <td>$lname</td> <td>$fa_name</td> <td>$gender</td> <td>$age</td> <td>$dob</td> <td>$email</td> <td>$address</td> <td>$state</td> <td>$country</td> <td>$number</td> </tr> </table>";
			}
		?>
	</body>
</html>
			
			
				
		
	

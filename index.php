<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Validating Forms</title>
		<link href="style.css" type="text/css" rel="stylesheet" />
	</head>
	
	<body>
		<h1>Registration Form</h1>

		<p>
			This form validates user input and then displays "Thank You" page.
		</p>
		
		<hr />
		
		<h2>Please, fill below fields correctly</h2>
		<form action="check.php" method="post">
		<dl>
			<dt>Name</dt>
			<dd>
				<input type="text" name="name" required/>
			</dd>
			
			<!-- Write other fiels similar to Name as specified in lab6.pdf -->
			<dt>Email</dt>
			<dd>
				<input type="text" name="email" required>
			</dd>
 
			<dt>Username</dt>
			<dd>
				<input type="text" name="username" required>
			</dd>

			<dt>Password</dt>
			<dd>
				<input type="text" name="password" required>
			</dd>

			<dt>Confirm Password</dt>
			<dd>
				<input type="text" name="confirm_password" required>
			</dd>

			<dt>Date of Birth</dt>
			<dd>
				<input type="text" name="birth">
			</dd>

			<dt>Gender</dt>
			<dd>
               <select name="Gender">
                 	<option>Male</option>
                 	<option>Female</option>
               </select>
			</dd>

			<dt>Marital Status</dt>
			<dd>
				<select name="Marital Status">
					<option>Single</option>
					<option>Married</option>
					<option>Divorced</option>
					<option>Widowed</option>
				</select>
			</dd>

			<dt>Address</dt>
			<dd>
				<input type="text" name="address" required>
			</dd>

			<dt>City</dt>
			<dd>
				<input type="text" name="city" required>
			</dd>

			<dt>Postal Code</dt>
			<dd>
				<input type="text" name="postal_code" required>
			</dd>

			<dt>Home Phone</dt>
			<dd>
				<input type="text" name="home_phone" required>
			</dd>

			<dt>Mobile Phone</dt>
			<dd>
				<input type="text" name="phone" required>
			</dd>

			<dt>Credit Card Number</dt>
			<dd>
				<input type="text" name="card_number" required>
			</dd>

			<dt>Credit Card Expiry Date</dt>
			<dd>
				<input type="text" name="expiry_date" required>
			</dd>

			<dt>Monthly Salary</dt>
			<dd>
				<input type="text" name="salary" required>
			</dd>

			<dt>Web Site Url</dt>
			<dd>
				<input type="text" name="url" required>
			</dd>

			<dt>Overall GPA</dt>
			<dd>
				<input type="text" name="gpa" required>
			</dd>
		</dl>
		
	    	<div>
		    	<input type="submit" value="Registration">
	    	</div>
	    </form>
	</body>
</html>
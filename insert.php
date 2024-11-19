<?php require_once 'core/handleForms.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<h1>Insert a user</h1>
	<form action="core/handleForms.php" method="POST">
		<p>
			<label for="firstName">First Name</label> 
			<input type="text" name="first_name">
		</p>
		<p>
			<label for="firstName">Last Name</label> 
			<input type="text" name="last_name">
		</p>
		<p>
			<label for="firstName">Email</label> 
			<input type="text" name="email">
		</p>
		<p>
			<label for="firstName">Gender</label> 
			<input type="text" name="gender">
		</p>
		<p>
			<label for="firstName">Home Address</label> 
			<input type="text" name="home_address">
		</p>
		<p>
			<label for="firstName">Date of Birth</label> 
			<input type="text" name="date_of_birth">
		</p>
		<p>
			<label for="firstName">Nationality</label> 
			<input type="text" name="nationality">
		</p>
		<p>
			<label for="firstName">Salary</label> 
			<input type="text" name="salary">
			<input type="submit" name="insertNurseBtn">
		</p>
	</form>
</body>
</html>
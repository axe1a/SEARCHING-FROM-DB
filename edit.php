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
	<?php $getNurseByID = getNurseByID($pdo, $_GET['nurse_id']); 
	?>
	<h1>Edit the nurse</h1>
	<form action="core/handleForms.php?nurse_id=<?php echo $_GET['nurse_id']; ?>" method="POST">
		<p>
			<label for="firstName">First Name</label> 
			<input type="text" name="first_name" value="<?php echo $getNurseByID['first_name']; ?>">
		</p>
		<p>
			<label for="firstName">Last Name</label> 
			<input type="text" name="last_name" value="<?php echo $getNurseByID['last_name']; ?>">
		</p>
		<p>
			<label for="firstName">Email</label> 
			<input type="text" name="email" value="<?php echo $getNurseByID['email']; ?>">
		</p>
		<p>
			<label for="firstName">Gender</label> 
			<input type="text" name="gender" value="<?php echo $getNurseByID['gender']; ?>">
		</p>
		<p>
			<label for="firstName">Home Address</label> 
			<input type="text" name="home_address" value="<?php echo $getNurseByID['home_address']; ?>">
		</p>
		<p>
			<label for="firstName">Date of Birth</label> 
			<input type="text" name="date_of_birth" value="<?php echo $getNurseByID['date_of_birth']; ?>">
		</p>
		<p>
			<label for="firstName">Nationality</label> 
			<input type="text" name="nationality" value="<?php echo $getNurseByID['nationality']; ?>">
		</p>
		<p>
			<label for="firstName">Salary</label> 
			<input type="text" name="salary" value="<?php echo $getNurseByID['salary']; ?>">
			<input type="submit" value="Save" name="editNurseBtn">
		</p>
	</form>
</body>
</html>
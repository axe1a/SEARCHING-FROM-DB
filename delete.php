<?php require_once 'core/models.php'; ?>
<?php require_once 'core/handleForms.php'; ?>
<?php require_once 'core/dbConfig.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<h1>Are you sure you want to delete this data?</h1>
	<?php $getNurseByID = getNurseByID($pdo, $_GET['nurse_id']); ?>
	<div class="container" style="border-style: solid; border-color: red; background-color: #ffcbd1;height: 500px;">
		<h2>First Name: <?php echo $getNurseByID['first_name']; ?></h2>
		<h2>Last Name: <?php echo $getNurseByID['last_name']; ?></h2>
		<h2>Email: <?php echo $getNurseByID['email']; ?></h2>
		<h2>Gender: <?php echo $getNurseByID['gender']; ?></h2>
		<h2>Home Address: <?php echo $getNurseByID['home_address']; ?></h2>
		<h2>Date of Birth: <?php echo $getNurseByID['date_of_birth']; ?></h2>
		<h2>Nationality: <?php echo $getNurseByID['nationality']; ?></h2>
		<h2>Salary: <?php echo $getNurseByID['salary']; ?></h2>

		<div class="deleteBtn" style="float: right; margin-right: 10px;">
			<form action="core/handleForms.php?nurse_id=<?php echo $_GET['nurse_id']; ?>" method="POST">
				<input type="submit" name="deleteNurseBtn" value="Delete" style="background-color: #f69697; border-style: solid;">
			</form>			
		</div>	

	</div>
</body>
</html>
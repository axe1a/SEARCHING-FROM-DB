<?php  
require_once 'dbConfig.php';
require_once 'models.php';

if (isset($_POST['insertNurseBtn'])) {
    $insertNurse = insertNewNurse($pdo, $_POST['first_name'], $_POST['last_name'], $_POST['email'], 
        $_POST['gender'], $_POST['home_address'], $_POST['date_of_birth'], 
        $_POST['nationality'], $_POST['salary']);

    if ($insertNurse['statusCode'] === 200) { 
		$_SESSION['message'] = $insertTeacher['message'];
		header("Location: ../index.php");
	}
	else { 
		$_SESSION['message'] = $insertNurse['message'];
	}
}

if (isset($_POST['editNurseBtn'])) {
    $editNurse = editNurse($pdo, $_POST['first_name'], $_POST['last_name'], 
        $_POST['email'], $_POST['gender'], $_POST['home_address'], 
        $_POST['date_of_birth'], $_POST['nationality'], $_POST['salary'], 
        $_GET['nurse_id']);

    if ($editNurse['statusCode'] === 200) { 
		$_SESSION['message'] = $editNurse['message'];
		header("Location: ../index.php");
	}
	else { 
		$_SESSION['message'] = $editNurse['message'];
	}
}

if (isset($_POST['deleteNurseBtn'])) {
    $deleteNurse = deleteNurse($pdo, $_GET['nurse_id']);

    if ($deleteNurse['statusCode'] === 200) { 
		$_SESSION['message'] = $deleteNurse['message'];
		header("Location: ../index.php");
	}
	else { 
		$_SESSION['message'] = $deleteNurse['message'];
	}
}

if (isset($_GET['searchBtn'])) {
	$searchForAUser = searchForANurse($pdo, $_GET['searchInput']);
	foreach ($searchForANurse as $row) {
		echo "<tr> 
				<td>{$row['nurse_id']}</td>
				<td>{$row['first_name']}</td>
				<td>{$row['last_name']}</td>
				<td>{$row['email']}</td>
				<td>{$row['gender']}</td>
				<td>{$row['home_address']}</td>
				<td>{$row['date_of_birth']}</td>
				<td>{$row['nationality']}</td>
				<td>{$row['salary']}</td>
			  </tr>";
	}
}

<?php  

require_once 'dbConfig.php';

function getAllNurse($pdo) {
	$sql = "SELECT * FROM nurse 
			ORDER BY first_name ASC";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute();
	if ($executeQuery) {
		return $stmt->fetchAll();
	}
}

function getNurseByID($pdo, $nurse_id) {
	$sql = "SELECT * FROM nurse WHERE nurse_id = ?";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute([$nurse_id]);

	if ($executeQuery) {
		return $stmt->fetch();
	}
}

function searchForANurse($pdo, $searchQuery) {
	
	$sql = "SELECT * FROM nurse WHERE 
			CONCAT(first_name,last_name,email,gender,
				home_address,date_of_birth,nationality,salary,date_added) 
			LIKE ?";

	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute(["%".$searchQuery."%"]);
	if ($executeQuery) {
		return $stmt->fetchAll();
	}
}



function insertNewNurse($pdo, $first_name, $last_name, $email, 
	$gender, $home_address, $date_of_birth, $nationality, $salary) {

	$sql = "INSERT INTO nurse 
			(
				first_name,
				last_name,
				email,
				gender,
				home_address,
				date_of_birth,
				nationality,
				salary
			)
			VALUES (?,?,?,?,?,?,?,?)
			";

	$stmt = $pdo->prepare($sql);
	
	$executeQuery = $stmt->execute([
		$first_name, $last_name, $email, 
		$gender, $home_address, $date_of_birth, 
		$nationality, $salary
	]);

	if ($executeQuery) {
		return ['message' => "Data successfully inserted.",
				'statusCode' => 200];
	}
	else {
		return ['message' => "Failed to insert data.",
				'statusCode' => 400];
	}

}



function editNurse($pdo, $first_name, $last_name, $email, $gender, 
	$home_address, $date_of_birth, $nationality, $salary, $nurse_id) {

	$sql = "UPDATE nurse
				SET first_name = ?,
					last_name = ?,
					email = ?,
					gender = ?,
					home_address = ?,
					date_of_birth = ?,
					nationality = ?,
					salary = ?
				WHERE nurse_id = ? 
			";

	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute([$first_name, $last_name, $email, $gender, 
		$home_address, $date_of_birth, $nationality, $salary, $nurse_id]);

		if ($executeQuery) {
			return ['message' => "Data successfully edited.",
					'statusCode' => 200];
		}
		else {
			return ['message' => "Failed to edit data.",
					'statusCode' => 400];
		}

}


function deleteNurse($pdo, $nurse_id) {
	$sql = "DELETE FROM nurse 
			WHERE nurse_id = ?";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute([$nurse_id]);

	if ($executeQuery) {
		return ['message' => "Data successfully deleted.",
				'statusCode' => 200];
	}
	else {
		return ['message' => "Failed to delete data.",
				'statusCode' => 400];
	}
}


<?php
	require_once("ajax/database.php");
	if (isset($_POST['submit'])) {		
		$sql = $conn->prepare("UPDATE tbl_emp_details SET department=? , name=? , email=?  WHERE id=?");
		$department=$_POST['department'];
		$name = $_POST['name'];
		$email= $_POST['email'];
		$sql->bind_param("sssi",$department, $name, $email,$_GET["id"]);	
		if($sql->execute()) {
			$success_message = "Edited Successfully";
		} else {
			$error_message = "Problem in Editing Record";
		}

	}
	$sql = $conn->prepare("SELECT * FROM tbl_emp_details WHERE id=?");
	$sql->bind_param("i",$_GET["id"]);			
	$sql->execute();
	$result = $sql->get_result();
	if ($result->num_rows > 0) {		
		$row = $result->fetch_assoc();
	}
	$conn->close();
?>
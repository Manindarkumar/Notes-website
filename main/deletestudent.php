<?php
	include('../connect.php');
	$id=$_GET['id'];
	$result = $db->prepare("DELETE FROM student WHERE id= :memid");
	$result->bindParam(':memid', $id);
	$result->execute();
	$usersdel = $db->prepare("DELETE FROM user WHERE student_id= :memid");
	$usersdel->bindParam(':memid', $id);
	$usersdel->execute();
	header ("location: students.php");
?>
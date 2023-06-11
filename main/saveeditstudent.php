<?php
// configuration
include('../connect.php');

// new data
$id = $_POST['memi'];
$a = $_POST['name'];
$h = $_POST['last_name'];
$b = $_POST['report'];
$c = $_POST['yoa'];
$d = $_POST['parent'];
$e = $_POST['dob'];
$f = $_POST['student_id'];
$g = $_POST['gender'];
$h = $_POST['iwy'];
// query

$sql = "UPDATE student 
        SET name=?,last_name=?, report=?, yoa=?, parent=?, dob=?,student_id=?,gender=?,year=?
		WHERE id=?";
$q = $db->prepare($sql);
$q->execute(array($a,$h,$b,$c,$d,$e,$f,$g,$h,$id));
header("location: students.php");

?>
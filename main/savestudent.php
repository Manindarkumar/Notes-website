<?php
session_start();
include('../connect.php');
$a = $_POST['name'];
$k = $_POST['last_name'];
$b = $_POST['report'];
$c = $_POST['yoa'];
$d = $_POST['parent'];
$e = $_POST['dob'];
$f = $_POST['student_id'];
$g = $_POST['gender'];
$j = $_POST['iwy'];
// query

$file_name  = strtolower($_FILES['file']['name']);
$file_ext = substr($file_name, strrpos($file_name, '.'));
$prefix = 'your_site_name_'.md5(time()*rand(1, 9999));
$file_name_new = $prefix.$file_ext;
$path = '../uploads/'.$file_name_new;

    /* check if the file uploaded successfully */
    if(@move_uploaded_file($_FILES['file']['tmp_name'], $path)) {

  //do your write to the database filename and other details   
  $sql = "INSERT INTO student (name,last_name,report,yoa,parent,dob,student_id,gender,file,year) VALUES (:a,:k,:b,:c,:d,:e,:f,:g,:h,:j);";

$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':k'=>$k,':b'=>$b,':c'=>$c,':d'=>$d,':e'=>$e,':f'=>$f,':g'=>$g,':h'=>$file_name_new,':j'=>$j));

  $sql1 = "INSERT INTO user (name,position,username,password,student_id) VALUES (:a,'student',:a,:a,(select max(id) from student));";
$q = $db->prepare($sql1);
$q->execute(array(':a'=>$a));
header("location: students.php");

	}
?>
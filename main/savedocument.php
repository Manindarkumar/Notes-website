<?php
session_start();
include('../connect.php');
$a = $_POST['title'];
$k = $_POST['doc_description'];
$b = $_POST['iwy'];

// query

$file_name  = strtolower($_FILES['file']['name']);
$file_ext = substr($file_name, strrpos($file_name, '.'));
$prefix = 'document_'.md5(time()*rand(1, 9999));
$file_name_new = $prefix.$file_ext;
$path = '../documents/'.$file_name_new;


    /* check if the file uploaded successfully */
    if(@move_uploaded_file($_FILES['file']['tmp_name'], $path)) {

  //do your write to the database filename and other details   
  $sql = "INSERT INTO documents (doc_title,doc_desc,doc_file,doc_standard) VALUES (:a,:k,:c,:b);";

$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':k'=>$k,':b'=>$b,':c'=>$file_name_new));

header("location: adddocuments.php");
	}
?>
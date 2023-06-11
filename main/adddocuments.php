<html>

<head>
    <title>
        Add Documents
    </title>

    <?php 
require_once('auth.php');
?>
    <link href="css/bootstrap.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">

    <link rel="stylesheet" href="css/font-awesome.min.css">
    <style type="text/css">
    body {
        padding-top: 60px;
        padding-bottom: 40px;
    }

    .sidebar-nav {
        padding: 9px 0;
    }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

    <link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
    <!--sa poip up-->
    <script src="jeffartagame.js" type="text/javascript" charset="utf-8"></script>
    <script src="js/application.js" type="text/javascript" charset="utf-8"></script>
    <link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script src="lib/jquery.js" type="text/javascript"></script>
    <script src="src/facebox.js" type="text/javascript"></script>
    <script type="text/javascript">
    jQuery(document).ready(function($) {
        $('a[rel*=facebox]').facebox({
            loadingImage: 'src/loading.gif',
            closeImage: 'src/closelabel.png'
        })
    })
    </script>
</head>
<?php
function createRandomPassword() {
	$chars = "003232303232023232023456789";
	srand((double)microtime()*1000000);
	$i = 0;
	$pass = '' ;
	while ($i <= 7) {

		$num = rand() % 33;

		$tmp = substr($chars, $num, 1);

		$pass = $pass . $tmp;

		$i++;

	}
	return $pass;
}
$finalcode='RS-'.createRandomPassword();
?>

<script>
function sum() {
    var txtFirstNumberValue = document.getElementById('txt1').value;
    var txtSecondNumberValue = document.getElementById('txt2').value;
    var result = parseInt(txtFirstNumberValue) - parseInt(txtSecondNumberValue);
    if (!isNaN(result)) {
        document.getElementById('txt3').value = result;

    }

    var txtFirstNumberValue = document.getElementById('txt11').value;
    var result = parseInt(txtFirstNumberValue);
    if (!isNaN(result)) {
        document.getElementById('txt22').value = result;
    }

    var txtFirstNumberValue = document.getElementById('txt11').value;
    var txtSecondNumberValue = document.getElementById('txt33').value;
    var result = parseInt(txtFirstNumberValue) + parseInt(txtSecondNumberValue);
    if (!isNaN(result)) {
        document.getElementById('txt55').value = result;

    }

    var txtFirstNumberValue = document.getElementById('txt4').value;
    var result = parseInt(txtFirstNumberValue);
    if (!isNaN(result)) {
        document.getElementById('txt5').value = result;
    }

}
</script>


<script language="javascript" type="text/javascript">
/* Visit http://www.yaldex.com/ for full source code
and get more free JavaScript, CSS and DHTML scripts! */
<!-- Begin
var timerID = null;
var timerRunning = false;

function stopclock() {
    if (timerRunning)
        clearTimeout(timerID);
    timerRunning = false;
}

function showtime() {
    var now = new Date();
    var hours = now.getHours();
    var minutes = now.getMinutes();
    var seconds = now.getSeconds()
    var timeValue = "" + ((hours > 12) ? hours - 12 : hours)
    if (timeValue == "0") timeValue = 12;
    timeValue += ((minutes < 10) ? ":0" : ":") + minutes
    timeValue += ((seconds < 10) ? ":0" : ":") + seconds
    timeValue += (hours >= 12) ? " P.M." : " A.M."
    document.clock.face.value = timeValue;
    timerID = setTimeout("showtime()", 1000);
    timerRunning = true;
}

function startclock() {
    stopclock();
    showtime();
}
window.onload = startclock;
// End -->
</SCRIPT>

<body style="background-color: wheat;">
    <?php include('navfixed.php');?>
    <div class="container-fluid" style="position:relative;top:2em;">
        <div class="row-fluid">
            <div class="span2">
                <div class="sidebar-nav" style="min-height: 20px;
  margin-top:-43px;
  font-size:1rem;
  margin-left:-20px;
  color:#fff;
  width:250px;
  height:850px;
  position:fixed;
  padding: 15px;
  margin-bottom: 20px;
  background-color: rgba(181, 255, 255, 0.568)">
                    <ul class="nav nav-list">
                        <li><a href="index.php" style="
    color: black;
"><i class="icon-dashboard icon-2x"></i> Dashboard </a></li>
                        <li><a href="students.php" style="
    color: black;
"><i class="icon-group icon-2x"></i>Manage Students</a> </li>

                        <li><a href="addstudent.php" style="
    color: black;
"><i class="icon-user icon-2x"></i>Add Student</a> </li>
                        <li "><a href=" adddocuments.php" style="
    color: black;
"><i class="fa fa-file" aria-hidden="true" style="font-size:30px; width: 30px; padding-left:10px;"></i> &nbsp;&nbsp;Add
                            Documents</a> </li>
                        <br><br>
                        <li>
                            <div class="hero-unit-clock">

                                <form name="clock">
                                    <form name="clock">
                                        <font color="white" style="
    		position: absolute;
    		display: inline-block;
    		/* bottom: 330px; */
			left: 22px;
    		font-size: 21px;
    		font-family: cursive;
    		font weight: 600px;
			top: 423px;
    		font-weight: 600;
    		color: #9c0925e0;">
                                            Time: <br></font>
                                        &nbsp;<input style="
			width:150px;
			position: absolute;
			display: inline-block;
			/* bottom: 260px; */
			top: 455px;
			/* border: 1px solid black; */
			border-radius: 7px;
			background: #f3f3f3;
			padding: 12px;" type="submit" class="trans" name="face" value="">
                                    </form>
                            </div>
                        </li>

                    </ul>
                </div>
                <!--/.well -->
            </div>
            <!--/span-->
            <div class="span10">
                <div class="contentheader">
                    <center style="
    margin: 13px; color: black"><i class="fa fa-file" aria-hidden="true" style="font-size:30px; width: 30px;"></i></i>
                        Add Documents </center>
                </div>
                <ul class="breadcrumb">
                    <li><a href="index.php">Dashboard</a></li> /
                    <li class="active">Add Documents</li>
                </ul>


                <div style="margin-top: -19px; margin-bottom: 21px;">
                    <a href="index.php"><button class="btn btn-default btn-large"
                            style="float: left; font-size: 18px; font-weight: 600; font-family: cursive; color: #518fd6; background-color: white;"><i
                                class="icon icon-circle-arrow-left icon-large"></i> Back</button></a>
                    <form action="savedocument.php" method="post" enctype="multipart/form-data">
                        <center>
                            <h4><i class="icon-edit icon-large"></i> Add New Document </h4>
                        </center>
                        <!-- <br> -->
                        <hr class="hr1">
                        <center>
                            <div id="ac">
                                <input type="hidden" name="memi" value="<?php echo $id; ?>" />
                                <!-- <span style="width: 150px;    display: inline-block;text-align: left;font-family: monospace;font-weight: 600;color: black;font-size: 16px;">Student ID: </span><input type="text" style="width:265px; height:30px;"  value="MS17-<?php 
$prefix= md5(time()*rand(1, 2)); echo strip_tags(substr($prefix ,0,4));?>" name="student_id" readonly Required /><br> -->
                                <span
                                    style="width: 150px;    display: inline-block;text-align: left;font-family: monospace;font-weight: 600;color: black;font-size: 16px;">Title
                                    : </span><input type="text" style="width:265px; height:30px;" name="title"
                                    Required /><br>
                                <span
                                    style="width: 150px;    display: inline-block;text-align: left;font-family: monospace;font-weight: 600;color: black;font-size: 16px;">Description
                                    : </span><input type="text" style="width:265px; height:30px;" name="doc_description"
                                    Required /><br>
                                <!-- <span style="width: 150px;    display: inline-block;text-align: left;font-family: monospace;font-weight: 600;color: black;font-size: 16px;">Gender: </span> -->
                                <!-- <select name="gender" style="width:265px; height:30px; margin-left:-5px;" >
	<option>Female</option>
	<option>Male</option>
</select><br> -->
                                <!-- <span style="width: 150px;    display: inline-block;text-align: left;font-family: monospace;font-weight: 600;color: black;font-size: 16px;">Date of Birth: </span><input type	="date" style="width:265px; height:30px;" name="dob" required /><br> -->
                                <span
                                    style="width: 153px;    display: inline-block;text-align: left;font-family: monospace;font-weight: 600;color: black;font-size: 16px;">College
                                    Year : </span><select name="iwy"
                                    style="width:265px; height:30px; margin-left:-5px;">
                                    <option>B.Tech 1st year</option>
                                    <option>B.Tech 2nd year</option>
                                    <option>B.Tech 3rd year</option>
                                    <option>B.Tech 4th year</option>
                                </select><br>
                                <!-- <span style="width: 150px;    display: inline-block;text-align: left;font-family: monospace;font-weight: 600;color: black;font-size: 16px;">Admission Year </span><select name="yoa" style="width:265px; height:30px; margin-left:-5px;" >
	<option>2009</option>
	<option>2010</option>
	<option>2011</option>
	<option>2012</option>
	<option>2013</option>
	<option>2014</option>
	<option>2015</option>
	<option>2016</option>
	<option>2017</option>
</select><br>
<span style="width: 150px;    display: inline-block;text-align: left;font-family: monospace;font-weight: 600;color: black;font-size: 16px;">Parent Phone: </span> <input type="text" style="width:265px; height:30px;" name="parent" required />
<br>
<span style="width: 150px;    display: inline-block;text-align: left;font-family: monospace;font-weight: 600;color: black;font-size: 16px;">Report : </span><textarea style="width:265px; height:50px;" name="report" ></textarea><br> -->
                                <span
                                    style="width: 150px;    display: inline-block;text-align: left;font-family: monospace;font-weight: 600;color: black;font-size: 16px;">Document
                                    File : </span><input type="file" name="file" id="file" required
                                    style="width: 265px; height: 50px;"><br><br>
                                <div>

                                    <button class="btn btn-success btn-block btn-large"
                                        style="width:267px;     font-family: monospace; font-weight: 600;"><i
                                            class="icon icon-save icon-large" style="padding-right: 15px;"></i>Upload
                                        Document</button>
                                </div>
                            </div>
                    </form>
                    </center>

                    <script src="js/jquery.js"></script>

                    <!-- <div id="logout"   style = "/* text-decoration: none; */
    padding-top: 15px;
    padding-bottom: 5px;
    padding-left: 15px;
    padding-right: 15px;
    margin: 10px;
    font-size: 20px;
    display: inline-block;
    width: 150px;
    height: 85px;
    text-align: center;
    margin-bottom: 5px;
    position: absolute;
    bottom: 4px;
    left: -10px;">
<a href="../index.php"><font color="red"><i class="icon-off icon-2x"></i></font><br>Logout</a>
</div> -->
</body>
<?php include('footer.php');?>

</html>
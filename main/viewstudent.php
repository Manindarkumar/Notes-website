<html>

<head>
    <title>
        View Student
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
// End 
-->
</SCRIPT>

<body style="background-color: wheat;">
    <?php include('navfixed.php');?>
    <?php
$position=$_SESSION['SESS_LAST_NAME'];
if($position=='cashier') {
	?>

    <!--<a href="../index.php">Logout</a>-->
    <?php
	}
	if($position=='admin') {
	?>
    <!-- STUDENT VIEW PAGE  -------- DASHBOARD OF ADMIN SIDE  -->
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
                        <li class=active><a href="students.php" style="
    color: black;
"><i class="icon-group icon-2x"></i>Manage Students</a> </li>
                        <li><a href="addstudent.php" style="
    color: black;
"><i class="icon-user icon-2x"></i>Add Student</a> </li>


                        <li><a href="adddocuments.php" style="
    color: black;
"><i class="fa fa-file" aria-hidden="true" style="font-size:30px; width: 30px;"></i> Add Documents</a> </li>

                        <br><br>
                        <li>
                            <div class="hero-unit-clock">

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
                    <center style="margin: 13px; color: black">
                        <i class="icon-table"></i> Students
                </div>
                </center>
                <ul class="breadcrumb">
                    <li><a href="index.php">Dashboard</a></li> /
                    <li class="active">Students</li>
                </ul>


                <div style="margin-top: -19px; margin-bottom: 21px;">
                    <a href="students.php"><button class="btn btn-default btn-large"
                            style="float: left; font-size: 18px; font-weight: 600; font-family: cursive; color: #518fd6; background-color: white;"><i
                                class="icon icon-circle-arrow-left icon-large"></i> Back</button></a>

                    <?php
	include('../connect.php');
	$id=$_GET['id'];
	$result = $db->prepare("SELECT * FROM student WHERE id= :userid");
	$result->bindParam(':userid', $id);
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++){
?>
                    <link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
                    <center>
                        <h4><i class="icon-edit icon-large"></i> Student Information</h4>
                    </center>
                    <hr>
                    <center><img src="../uploads/<?php echo $row['file'];?>" class="roundimage2" alt="" />
                        <br><br>

                        <table>
                            <tr>
                                <td
                                    style="width: 165px;text-align: left;font-family: monospace;font-weight: 600;color: black;font-size: 16px;">
                                    Student ID. : </td>
                                <td style="padding: 10px;
				border-top: 1px solid #fafafa;
				background-color: #f4f4f4;
				text-align: center;
				color: #7d7d7d;"> <?php echo $row['student_id']; ?></td>
                            </tr>
                            <tr>
                                <td
                                    style="width: 165px;text-align: left;font-family: monospace;font-weight: 600;color: black;font-size: 16px;">
                                    Full Name : </td>
                                <td style="padding: 10px;
				border-top: 1px solid #fafafa;
				background-color: #f4f4f4;
				text-align: center;
				color: #7d7d7d;"> <?php echo $row['name']; ?> <?php echo $row['last_name']; ?></td>
                            </tr>
                            <tr>
                                <td
                                    style="width: 165px;text-align: left;font-family: monospace;font-weight: 600;color: black;font-size: 16px;">
                                    Gender : </td>
                                <td style="padding: 10px;
				border-top: 1px solid #fafafa;
				background-color: #f4f4f4;
				text-align: center;
				color: #7d7d7d;"> <?php echo $row['gender']; ?></td>
                            </tr>
                            <tr>
                                <td
                                    style="width: 165px;text-align: left;font-family: monospace;font-weight: 600;color: black;font-size: 16px;">
                                    Date Of Birth : </td>
                                <td style="padding: 10px;
				border-top: 1px solid #fafafa;
				background-color: #f4f4f4;
				text-align: center;
				color: #7d7d7d;"> <?php echo $row['dob']; ?></td>
                            </tr>

                            <tr>
                                <td
                                    style="width: 165px;text-align: left;font-family: monospace;font-weight: 600;color: black;font-size: 16px;">
                                    Year of Studying : </td>
                                <td style="padding: 10px;
				border-top: 1px solid #fafafa;
				background-color: #f4f4f4;
				text-align: center;
				color: #7d7d7d;"> <?php echo $row['year']; ?></td>
                            </tr>

                            <tr>
                                <td
                                    style="width: 165px;text-align: left;font-family: monospace;font-weight: 600;color: black;font-size: 16px;">
                                    Admission Year : </td>
                                <td style="padding: 10px;
				border-top: 1px solid #fafafa;
				background-color: #f4f4f4;
				text-align: center;
				color: #7d7d7d;"> <?php echo $row['yoa']; ?></td>
                            </tr>
                            <tr>
                                <td
                                    style="width: 165px;text-align: left;font-family: monospace;font-weight: 600;color: black;font-size: 16px;">
                                    Parent Phone: </td>
                                <td style="padding: 10px;
				border-top: 1px solid #fafafa;
				background-color: #f4f4f4;
				text-align: center;
				color: #7d7d7d;"> <?php echo $row['parent']; ?></td>
                            </tr>
                            <tr>
                                <td
                                    style="width: 165px;text-align: left;font-family: monospace;font-weight: 600;color: black;font-size: 16px;">
                                    Report : </td>
                                <td style="padding: 10px;
				border-top: 1px solid #fafafa;
				background-color: #f4f4f4;
				text-align: center;
				color: #7d7d7d;"> <?php echo $row['report']; ?></td>
                            </tr>


                        </table>
                        <br>

                    </center>

                </div>
                <?php
}
?>

                <script src="js/jquery.js"></script>
                <script type="text/javascript">
                $(function() {


                    $(".delbutton").click(function() {

                        //Save the link in a variable called element
                        var element = $(this);

                        //Find the id of the link that was clicked
                        var del_id = element.attr("id");

                        //Built a url to send
                        var info = 'id=' + del_id;
                        if (confirm("Sure you want to delete this Student? There is NO undo!")) {

                            $.ajax({
                                type: "GET",
                                url: "deletestudent.php",
                                data: info,
                                success: function() {

                                }
                            });
                            $(this).parents(".record").animate({
                                    backgroundColor: "#fbc7c7"
                                }, "fast")
                                .animate({
                                    opacity: "hide"
                                }, "slow");

                        }

                        return false;

                    });

                });
                </script>

                <?php
}
// STUDENT VIEW PAGE -------> DASHBOARD OF STUDENT SIDE 

elseif($position=='student') {
?>
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
"><i class="icon-dashboard icon-2x"></i> Student Dashboard </a></li>
                                    <li class="active"><a
                                            href="viewstudent.php?id=<?php echo $_SESSION['SESS_STUDENT_ID']; ?>" style="
    color: black;
"><i class="icon-group icon-2x"></i>Student Profile</a></li>
                                    <li><a href="editstudent.php?id=<?php echo $_SESSION['SESS_STUDENT_ID']; ?>" style="
    color: black;
"><i class="icon-user icon-2x"></i> Edit Profile</a></li>
                                    <li><a href="viewdocuments.php" style="
    color: black; font-size: 15px;
"><i class="fa fa-file" aria-hidden="true" style="font-size:30px; width: 30px; padding-left: 7px;"></i> Documents</a>
                                    </li>

                                    <br><br>
                                    <li>
                                        <div class="hero-unit-clock">

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
                                <center style="margin: 13px; color: black">
                                    <i class="icon-table"></i> Students Profile
                                </center>
                            </div>
                            <ul class="breadcrumb">
                                <li><a href="index.php">Dashboard</a></li> /
                                <li class="active">Students Information</li>
                            </ul>


                            <div style="margin-top: -19px; margin-bottom: 21px;">
                                <a href="index.php"><button class="btn btn-default btn-large"
                                        style="float: left; font-size: 18px; font-weight: 600; font-family: cursive; color: #518fd6; background-color: white;"><i
                                            class="icon icon-circle-arrow-left icon-large"></i> Back</button></a>

                                <?php
	include('../connect.php');
	$id=$_GET['id'];
	$result = $db->prepare("SELECT * FROM student WHERE id= :userid");
	$result->bindParam(':userid', $id);
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++){
?>
                                <link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
                                <center>
                                    <h4><i class="icon-edit icon-large"></i> Student Information</h4>
                                </center>
                                <hr>
                                <center><img src="../uploads/<?php echo $row['file'];?>" class="roundimage2" alt="" />
                                    <br><br>

                                    <table>
                                        <tr>
                                            <td
                                                style="width: 165px;text-align: left;font-family: monospace;font-weight: 600;color: black;font-size: 16px;">
                                                Student ID. : </td>
                                            <td style="padding: 10px;
				border-top: 1px solid #fafafa;
				background-color: #f4f4f4;
				text-align: center;
				color: #7d7d7d;"> <?php echo $row['student_id']; ?></td>
                                        </tr>
                                        <tr>
                                            <td
                                                style="width: 165px;text-align: left;font-family: monospace;font-weight: 600;color: black;font-size: 16px;">
                                                Full Name : </td>
                                            <td style="padding: 10px;
				border-top: 1px solid #fafafa;
				background-color: #f4f4f4;
				text-align: center;
				color: #7d7d7d;"> <?php echo $row['name']; ?> <?php echo $row['last_name']; ?></td>
                                        </tr>
                                        <tr>
                                            <td
                                                style="width: 165px;text-align: left;font-family: monospace;font-weight: 600;color: black;font-size: 16px;">
                                                Gender : </td>
                                            <td style="padding: 10px;
				border-top: 1px solid #fafafa;
				background-color: #f4f4f4;
				text-align: center;
				color: #7d7d7d;"> <?php echo $row['gender']; ?></td>
                                        </tr>
                                        <tr>
                                            <td
                                                style="width: 165px;text-align: left;font-family: monospace;font-weight: 600;color: black;font-size: 16px;">
                                                Date Of Birth : </td>
                                            <td style="padding: 10px;
				border-top: 1px solid #fafafa;
				background-color: #f4f4f4;
				text-align: center;
				color: #7d7d7d;"> <?php echo $row['dob']; ?></td>
                                        </tr>
                                        <tr>
                                            <td
                                                style="width: 165px;text-align: left;font-family: monospace;font-weight: 600;color: black;font-size: 16px;">
                                                Admission Year : </td>
                                            <td style="padding: 10px;
				border-top: 1px solid #fafafa;
				background-color: #f4f4f4;
				text-align: center;
				color: #7d7d7d;"> <?php echo $row['yoa']; ?></td>
                                        </tr>
                                        <tr>
                                            <td
                                                style="width: 165px;text-align: left;font-family: monospace;font-weight: 600;color: black;font-size: 16px;">
                                                Parent Phone: </td>
                                            <td style="padding: 10px;
				border-top: 1px solid #fafafa;
				background-color: #f4f4f4;
				text-align: center;
				color: #7d7d7d;"> <?php echo $row['parent']; ?></td>
                                        </tr>
                                        <tr>
                                            <td
                                                style="width: 165px;text-align: left;font-family: monospace;font-weight: 600;color: black;font-size: 16px;">
                                                Report : </td>
                                            <td style="padding: 10px;
				border-top: 1px solid #fafafa;
				background-color: #f4f4f4;
				text-align: center;
				color: #7d7d7d;"> <?php echo $row['report']; ?></td>
                                        </tr>


                                    </table>
                                    <br>

                                </center>

                            </div>
                            <?php
}
?>

                            <script src="js/jquery.js"></script>
                            <script type="text/javascript">
                            $(function() {


                                $(".delbutton").click(function() {

                                    //Save the link in a variable called element
                                    var element = $(this);

                                    //Find the id of the link that was clicked
                                    var del_id = element.attr("id");

                                    //Built a url to send
                                    var info = 'id=' + del_id;
                                    if (confirm(
                                            "Sure you want to delete this Student? There is NO undo!"
                                        )) {

                                        $.ajax({
                                            type: "GET",
                                            url: "deletestudent.php",
                                            data: info,
                                            success: function() {

                                            }
                                        });
                                        $(this).parents(".record").animate({
                                                backgroundColor: "#fbc7c7"
                                            }, "fast")
                                            .animate({
                                                opacity: "hide"
                                            }, "slow");

                                    }

                                    return false;

                                });

                            });
                            </script>
                            <?php
}
?>

</body>
<?php include('footer.php');?>

</html>
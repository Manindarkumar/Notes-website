<!DOCTYPE html>
<html>

<head>
    <title>
        Dashboard
    </title>
    <link href="../style.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">

    <link rel="stylesheet" href="css/font-awesome.min.css">
    <style type="text/css">
    .sidebar-nav {
        padding: 9px 0;
    }

    /* The Modal (background) */
    .modal {
        display: none;
        /* Hidden by default */
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.4);
        /* Black w/ opacity */
    }

    /* Modal Content */
    .modal-content {
        position: relative;
        background-color: #fefefe;
        margin: auto;
        padding: 0;
        border: 1px solid #888;
        width: 80%;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        -webkit-animation-name: animatetop;
        -webkit-animation-duration: 0.4s;
        animation-name: animatetop;
        animation-duration: 0.4s
    }

    /* Add Animation */
    @-webkit-keyframes animatetop {
        from {
            top: -300px;
            opacity: 0
        }

        to {
            top: 0;
            opacity: 1
        }
    }

    @keyframes animatetop {
        from {
            top: -300px;
            opacity: 0
        }

        to {
            top: 0;
            opacity: 1
        }
    }

    /* The Close Button */
    .close {
        color: white;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }

    .modal-header {
        padding: 2px 16px;
        background-color: #a82740;
        color: white;
    }

    .modal-body {
        padding: 2px 16px;
    }

    .modal-footer {
        padding: 2px 16px;
        background-color: #5cb85c;
        color: white;
    }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
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
    });

    function showModal() {
        var modal = document.getElementById("myModal");
        modal.style.display = "block";
    }
    </script>
    <?php
	require_once('auth.php');
?>
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
</head>

<body>

    <?php include('navfixed.php');?>
    <div class="bg-main" style="
	overflow: hidden;
	">
        <?php
$_SESSION['NOTICE_COUNT'] = 0;
$position=$_SESSION['SESS_LAST_NAME'];
if($position=='cashier') {
?>

        <!--<a href="../index.php">Logout</a>-->
        <?php
}
if($position=='admin') {
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
                        <ul class=" nav nav-list">
                            <li class="active"><a href="index.php" style="
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
                    <div class="contentheader" style="
    color: wheat;
	font-family: monospace;
">
                        <i class="icon-dashboard"></i> Dashboard
                    </div>
                    <!-- <ul class="breadcrumb">
			<li class="active">Dashboard</li>
			</ul> -->
                    <!-- <center><div id="welcome" style="
    		display: inline-block;
    		/* left: 109px; */
    		/* border-left-width: 0px; */
    		/* padding-left: 0px; */
    		width: 500px;
    		height: 18px;
    		padding: 60px;
    		align-content: center;
    		font-size: 55px;
    		font-family: cursive;
			color: #9c0925e0;
    		font-weight: 600;"> -->
                    <!-- <font style="font-size: 55px;
    		color: blue;
   			font-weight: 600;
    		font-family: cursive;"> -->
                    <!-- WELCOME !!</div></center> -->

                    <div id="mainmain" style="margin-top: -18px;">
                        <h3 style="color:white;">Welcome to Admin Dashboard You Can add and delete student profile and
                            upload documents
                        </h3>
                        </br>
                    </div>
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
                    <!-- </div> -->


                    <?php
}
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
                                        <li class="active"><a href="index.php" style="
color: black;
"><i class="icon-dashboard icon-2x"></i>
                                                Student Dashboard </a></li>
                                        <li><a href="viewstudent.php?id=<?php echo $_SESSION['SESS_STUDENT_ID']; ?>"
                                                style="
    color: black;
"><i class="icon-group icon-2x"></i>Student Profile</a></li>
                                        <li><a href="editstudent.php?id=<?php echo $_SESSION['SESS_STUDENT_ID']; ?>"
                                                style="
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
                                <div class="contentheader" style="color:white;">
                                    <i class="icon-dashboard"></i> Student Dashboard
                                </div>
                                <!-- <ul class="breadcrumb">
			<li class="active">Dashboard</li>
			</ul> -->
                                <!-- <center><div id="welcome" style="
    		display: inline-block;
    		/* left: 109px; */
    		/* border-left-width: 0px; */
    		/* padding-left: 0px; */
    		width: 500px;
    		height: 18px;
    		padding: 60px;
    		align-content: center;
    		font-size: 55px;
    		font-family: cursive;
			color: #9c0925e0;
    		font-weight: 600;">
				<font style="font-size: 55px;
    		color: blue;
   			font-weight: 600;
    		font-family: cursive;">
			WELCOME !!</div></center> -->

                                <div id="mainmain">
                                    <h3 style="color:white;">Welcome to Student Dashboard You Can Edit you profile and
                                        download documents
                                    </h3>
                                    </br>


                                </div>
                                <div class="modal-body" style="
    font-size: 19px;
    font-family: monospace;
    font-weight: 600;
    background-color: whitesmoke;
    color: black;
">

                                </div>


                            </div>

                        </div>

                        <?php
}
?>
                        <?php
if(!is_null($info['Header']) && $info['Header'] != ''){
 echo '<script type="text/javascript">showModal();</script>';
}
?>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <script>
        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];
        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            var modal = document.getElementById("myModal");
            modal.style.display = "none";
        }
        </script>
</body>
<?php include('footer.php'); ?>

</html>
<?php
	//Start session
	session_start();
	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	unset($_SESSION['SESS_LAST_NAME']);
	unset($_SESSION['SESS_STUDENT_ID']);
?>
<html>

<head>
    <title>
        CNC HUB
    </title>
    <!-- <link rel="shortcut icon" href="main/images/pos.jpg"> -->
    <link rel="icon" href="./favicon.ico" type="" />
    <!-- <link rel="stylesheet" href="main/css/font-awesome.min.css">

    <link href="main/css/bootstrap.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="main/css/DT_bootstrap.css"> -->
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./login.css">

    <!-- <style type="text/css">
    body {
        background-color=#D6ACE6;
        padding-top: 60px;
        padding-bottom: 40px;
    }

    .sidebar-nav {
        padding: 9px 0;
    }
    </style>
    <link href="main/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet" type="text/css" /> -->
</head>

<!-- <body style=" 
		background-image: url('book-with-green-board-background.jpg');
		background-size: 100%;
		background-position: bottom;
		">
    <h2 class="heading">
        <center>Student Record Management System</center>
    </h2>
    <div class="heading" style="
    font-size: 45px;
    line-height: 40px;
    font-family: cursive;
    font-style: normal;
    font-weight: 550;
    color: #9c0925e0;
 	">
        <center>
            Student Record Management System
        </center>
    </div>
    <div class="container-fluid" style="
    /* width: 850px; */
    /* height: 366px; */
    /* padding-left: 13px; */
    /* padding-right: 0px; */
    display: inline;
">
        <div class="row-fluid">
            <div class="span4">
            </div>

        </div>
        <div id="login" style="
    position: absolute;
    left: 110px;
	background: rgba(250,143,207,0.7);
"> -->

<body>
    <?php
if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
	foreach($_SESSION['ERRMSG_ARR'] as $msg) {
		echo '<div style="color: red; text-align: center;">',$msg,'</div><br>'; 
	}
	unset($_SESSION['ERRMSG_ARR']);
}
?>
    <form id="login" action="login.php" method="post">
        <h1>Login</h1>
        <div class="input-prepend">
            <input type="text" name="username" Placeholder="Username" required /><br>
        </div>
        <div class="input-prepend">
            <input type="password" name="password" Placeholder="Password" required /><br>
        </div>
        <div>
            <button class="login-btn" href="dashboard.html" type="submit">Log In</button>
        </div>
    </form>
    </div>
    </div>
    </div>
    </div>
</body>

</html>
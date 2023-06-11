<div class="navbar navbar-fixed-top">
    <div class="navbar-custom" style="backgroud-color:red;">
        <div class="container-fluid" style="
        margin: 0px;
        padding: 8px;
        
">
            <!-- <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a> -->

            <a class="brand" href="#" style="
    color: white;
    font-size:2em;
    font-family: sans-serif;
"><b>CNC HUB</b></a>
            <div class="nav-collapse collapse">
                <ul class="nav pull-right">
                    <li><a style="
              color: white;
              font-family: sans-serif;
              font-size: 20px;

"><i class="icon-user icon-large"></i><strong> <?php echo $_SESSION['SESS_FIRST_NAME'];?></strong></a></li>
                    <li><a style="
       color: white;
       font-family: sans;
    
"> <i class="icon-calendar icon-large"></i>
                            <?php
								$Today = date('y:m:d',mktime(0,0,0));
								$new = date('l, F d, Y', strtotime($Today));
								echo $new;
								?>

                        </a></li>
                    <li>
                        <a href="../index.php" style="
              color: white;
    padding: 5px 0px 0px 0px;
    font-family: sans;
    font-size: 16px;
   
">
                            <font color="white"><i class="icon-off icon-2x"></i></font>
                            <br>
                        </a>
                    </li>
                    <!-- <li><a href="../index.php"><font color="red"><i class="icon-off icon-large"></i></font> Log Out</a></li> -->
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
</div>
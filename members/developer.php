
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="St.Lukes Boys School management System">
    <meta name="author" content="Kithinji Godfrey">
	<link href="admin/bootstrap/css/index_background.css" rel="stylesheet" media="screen"/>
<link rel="shortcut icon" href="images/logo.png" />

</style>
</head>
<?php
include('dbconn.php');
?>
<?php  include('header.php'); ?>
<?php  include('session.php'); ?>
<?php include('header_dashboard.php'); ?>
    <body id="home">
		<?php include('navbar_about.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span12" id="content">
                     <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
								<div class="navbar navbar-inner block-header">
									<div id="" class="muted pull-right"><a id="return" data-placement="left" title="Click to Return" href="index.php"><i class="icon-arrow-left"></i> Back</a></div>
									<script type="text/javascript">
																$(document).ready(function(){
																	$('#return').tooltip('show');
																	$('#return').tooltip('hide');
																});
																</script> 
								</div>
                            <div class="block-content collapse in" ">
							<h3></i><i class="icon-group"></i>&nbsp;System Developer</h3>
							<hr>
							<div class="span3"></div>
                                <p align="center">
							
                                <div class="span3" >
										<left>
								        <img id="developers" src="developers/admin.jpg" class="img-circle">
								        <hr>
										<p>Name: Muwanga Joel</p>
										<p>Address:Bugema University</p>
										<p>Email:<a href="http://www.gmail.com"> muwangajoel@gmail.com</a></p>
										<p>Lets keep in touch </p>
								        </left>
								</div>
								</p>
                                
                               
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                </div>
            </div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>
</html>
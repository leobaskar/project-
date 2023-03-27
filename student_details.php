<?php
include("dbconnect.php");
session_start();
extract($_POST);
$uname=$_SESSION['uname'];
$qry=mysql_query("select * from student_reg");
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
<title>Hostel Leave Management System</title>
<!-- Meta-Tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Scholar Vision Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Meta-Tags -->
<!-- Custom-Stylesheet-Links -->
<!-- Bootstrap-CSS --> <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- Font-awesome-CSS --> <link href="css/font-awesome.css" rel="stylesheet"> 
<!-- Index-Page-CSS --><link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom-Stylesheet-Links -->
<!--web-fonts-->
<!-- Headings-font --><link href="//fonts.googleapis.com/css?family=Hind+Vadodara:300,400,500,600,700" rel="stylesheet">
<!-- Body-font --><link href="//fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
<!--//web-fonts-->
<!--//fonts-->
<!-- js -->
</head>
<body>
<!-- banner -->
<div class="banner inner-banner-w3-agileits" id="home">
	<div class="banner-overlay-agileinfo">
	<div class="top-header-agile">
		<h1><a class="col-md-4 navbar-brand" href="#">HOSTEL LEAVE<span>MANAGEMENT SYSTEM</span></a></h1>
		<div class="col-md-4 top-header-agile-right">
				<ul>
					
				</ul>
	  </div>
			<div class="col-md-4 top-header-agile-left">
				<ul class="num-w3ls">
				</ul>
				<div class="w3ls_search">
													<div class="cd-main-header">
														<ul class="cd-header-buttons">
														</ul> <!-- cd-header-buttons -->
													</div>
													<div id="cd-search" class="cd-search">
														<form action="#" method="post">
														</form>
													</div>
			  </div>
	  </div>
			
			<div class="clearfix"></div>
	  </div>

		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="link-effect-3" id="link-effect-3">
						<ul class="nav navbar-nav">
							<li ><a href="warden_home.php" data-hover="Home">HOME</a></li>
							<li ><a href="leave_request_view.php" >STUDENT LEAVE REQUEST</a></li>
							<li class="active"><a href="student_details.php" >STUDENT DETAILS</a></li>
							<li><a href="index.php" >LOGOUT</a></li>
						</ul>
					</nav>
				</div>
			</nav>	
				<h2 class="inner-tittle-w3layouts">WARDEN</h2>
		</div>
	</div>
</div>
<!-- //banner -->
<!--about-inner-->
<!--about-top-->
<div class="about-top-w3layouts">
  <form name="form1" method="post" action="">
    <h2 align="center">STUDENT DETAILS</h2>
    <p align="center">&nbsp;</p>
    <table width="1310" height="102" border="0" align="center">
      <tr>
        <th scope="row"><div align="center"><strong>Name</strong></div></th>
        <td><div align="center"><strong>Father Name </strong></div></td>
        <td><div align="center"><strong>Rollno</strong></div></td>
        <td><div align="center"><strong>Class</strong></div></td>
        <td><div align="center"><strong>Department</strong></div></td>
        <td><div align="center"><strong>Date of Birth </strong></div></td>
        <td><div align="center"><strong>Age</strong></div></td>
        <td><div align="center"><strong>Gender</strong></div></td>
        <td><div align="center"><strong>Contact</strong></div></td>
        <td><div align="center"><strong>Email</strong></div></td>
        <td><div align="center"><strong>Address</strong></div></td>
        <td><div align="center"><strong>Username</strong></div></td>
        <td><div align="center"><strong>Register Date </strong></div></td>
      </tr>
	  <?php
	  while($row=mysql_fetch_array($qry))
	  {
	  ?>
      <tr>
        <th><div align="center"><?php echo $row['name'];?></div></th>
        <td><div align="center"><?php echo $row['fname'];?></div></td>
        <td><div align="center"><?php echo $row['rollno'];?></div></td>
        <td><div align="center"><?php echo $row['class'];?></div></td>
        <td><div align="center"><?php echo $row['department'];?></div></td>
        <td><div align="center"><?php echo $row['dob'];?></div></td>
        <td><div align="center"><?php echo $row['age'];?></div></td>
        <td><div align="center"><?php echo $row['gender'];?></div></td>
        <td><div align="center"><?php echo $row['contact1'];?>,<?php echo $row['contact2'];?></div></td>
        <td><div align="center"><?php echo $row['email'];?></div></td>
        <td><div align="center"><?php echo $row['address'];?></div></td>
        <td><div align="center"><?php echo $row['uname'];?></div></td>
        <td><div align="center"><?php echo $row['rdate'];?></div></td>
      </tr>
	  <?php
	  }
	  ?>
    </table>
    <p align="center">&nbsp; </p>
    <p align="center">&nbsp;</p>
  </form>
</div>
<!--//about-top-->
<!-- team-grids -->

<!-- //team-grids -->
<!-- Stats -->
<!-- //Stats -->
<!-- Register -->
<!-- //Register -->
<!--//about-inner-->
<!--footer-->

<!--//footer-->	
<!-- copy-right -->
			<div class="copyright-wthree w3agileits-ref">
				<p>&copy; 2020 . All Rights Reserved | Design by Admin</p>
			</div>
<!-- //copy-right -->
	<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<!-- Dropdown-Menu-JavaScript -->
			<script>
				$(document).ready(function(){
					$(".dropdown").hover(            
						function() {
							$('.dropdown-menu', this).stop( true, true ).slideDown("fast");
							$(this).toggleClass('open');        
						},
						function() {
							$('.dropdown-menu', this).stop( true, true ).slideUp("fast");
							$(this).toggleClass('open');       
						}
					);
				});
			</script>
		<!-- //Dropdown-Menu-JavaScript -->
	
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- Countdown-Timer-JavaScript -->
			<script src="js/simplyCountdown.js"></script>
			<script>
				var d = new Date(new Date().getTime() + 948 * 120 * 120 * 2000);

				// default example
				simplyCountdown('.simply-countdown-one', {
					year: d.getFullYear(),
					month: d.getMonth() + 1,
					day: d.getDate()
				});

				// inline example
				simplyCountdown('.simply-countdown-inline', {
					year: d.getFullYear(),
					month: d.getMonth() + 1,
					day: d.getDate(),
					inline: true
				});

				//jQuery example
				$('#simply-countdown-losange').simplyCountdown({
					year: d.getFullYear(),
					month: d.getMonth() + 1,
					day: d.getDate(),
					enableUtc: false
				});
			</script>
		<!-- //Countdown-Timer-JavaScript -->
<!-- Starts-Number-Scroller-Animation-JavaScript -->		
<script type="text/javascript" src="js/numscroller-1.0.js"></script>
<!-- //Starts-Number-Scroller-Animation-JavaScript -->


<!--search-bar-->
		<script src="js/main.js"></script>	
<!--//search-bar-->

 <!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
<!--js for bootstrap working-->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>
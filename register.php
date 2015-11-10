<?php
	//Start session
	session_start();	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	unset($_SESSION['SESS_LAST_NAME']);
?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="keywords" content="Ingredients - Social Recipe HTML Template" />
	<meta name="description" content="Ingredients - Social Recipe HTML Template">
	<meta name="author" content="notenoughrecipes.com">
	
	<title>Ingredients</title>
	
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/animate.css" />
	<link href="http://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,800" rel="stylesheet">
	<link rel="shortcut icon" href="images/favicon.ico" />
	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->
<script type="text/javascript">
function validateForm()
{
var a=document.forms["reg"]["fname"].value;
var b=document.forms["reg"]["lname"].value;
var c=document.forms["reg"]["mname"].value;
var d=document.forms["reg"]["address"].value;
var e=document.forms["reg"]["contact"].value;
var f=document.forms["reg"]["pic"].value;
var g=document.forms["reg"]["pic"].value;
var h=document.forms["reg"]["pic"].value;
if ((a==null || a=="") && (b==null || b=="") && (c==null || c=="") && (d==null || d=="") && (e==null || e=="") && (f==null || f==""))
  {
  alert("All Field must be filled out");
  return false;
  }
if (a==null || a=="")
  {
  alert("First name must be filled out");
  return false;
  }
if (b==null || b=="")
  {
  alert("Last name must be filled out");
  return false;
  }
if (c==null || c=="")
  {
  alert("Gender name must be filled out");
  return false;
  }
if (d==null || d=="")
  {
  alert("address must be filled out");
  return false;
  }
if (e==null || e=="")
  {
  alert("contact must be filled out");
  return false;
  }
if (f==null || f=="")
  {
  alert("picture must be filled out");
  return false;
  }
if (g==null || g=="")
  {
  alert("username must be filled out");
  return false;
  }
if (h==null || h=="")
  {
  alert("password must be filled out");
  return false;
  }
}
</script>
</head>

<body>
<!--header-->
<header class="head" role="banner">
		<!--wrap-->
		<div class="wrap clearfix">
			<a href="index.php" title="Recipes" class="logo"><img src="images/ico/logo.png" alt="Ingredients logo" /></a>
			
			<nav class="main-nav" role="navigation" id="menu">
				<ul>
					<li class="current-menu-item"><a href="index.php" title="Home"><span>Home</span></a></li>
					<li><a href="recipes.html" title="Recipes"><span>Recipes</span></a>
						<ul>
							<li><a href="recipes2.html" title="Recipes 2">Recipes 2</a></li><li><a href="recipe.html" title="Recipe">Recipe</a></li>
						</ul>

			</nav>
			
			<nav class="user-nav" role="navigation">
				<ul>
					<li class="light"><a href="find_recipe.html" title="Search for recipes"><i class="ico i-search"></i> <span>Search for recipes</span></a></li>
					<li class="medium"><a href="Myprofile.php" title="My account"><i class="ico i-account"></i> <span>My account</span></a></li>
					<li class="dark"><a href="recipe.php" title="Submit a recipe"><i class="ico i-submitrecipe"></i> <span>Submit a recipe</span></a></li>
				</ul>
			</nav>
		</div>
		<!--//wrap-->
	</header>
	<!--//header-->
	<!--main-->
	<main class="main" role="main">
		<!--wrap-->
		<div class="wrap clearfix">
			<!--row-->
			<div class="row">
			<!--content-->
				<section class="content center full-width wow fadeInUp">
					<div class="modal container">
<form name="reg" action="code_exec.php" onsubmit="return validateForm()" method="post">
<div align="center" style="border:1px solid #F4716A;background:white;font-size:18px;font-weight:bold;padding:20px;color:#F4716A">
		  <?php 
		$remarks=$_GET['remarks'];
		if ($remarks==null and $remarks=="")
		{
		echo 'Register Here';
		}
		if ($remarks=='success')
		{
		echo 'Registration Success';
		}
		?>	
	    </div>
<table width="274" border="0" align="center" cellpadding="2" cellspacing="0">
  
  <tr>
    <td style="background:#F4716A;color:white" width="95"><div align="right">First Name:</div></td>
    <td width="171"><input type="text" name="fname" /></td>
  </tr>
  <tr>
    <td style="background:#F4716A;color:white"><div align="right">Last Name:</div></td>
    <td><input type="text" name="lname" /></td>
  </tr>
  <tr>
    <td style="background:#F4716A;color:white"><div align="right">Gender:</div></td>
    <td><input type="text" name="mname" /></td>
  </tr>
  <tr>
    <td style="background:#F4716A;color:white"><div align="right">Address:</div></td>
    <td><input type="text" name="address" /></td>
  </tr>
  <tr>
    <td style="background:#F4716A;color:white"><div align="right">Contact No.:</div></td>
    <td><input type="text" name="contact" /></td>
  </tr>
  <tr>
    <td style="background:#F4716A;color:white"><div align="right">Picture:</div></td>
    <td><input type="file" name="pic" /></td>
  </tr>
 <tr>
    <td style="background:#F4716A;color:white"><div align="right">Username:</div></td>
    <td><input type="text" name="username" /></td>
  </tr>
 <tr>
    <td style="background:#F4716A;color:white"><div align="right">Password:</div></td>
    <td><input type="password" name="password" /></td>
  </tr>
</table>
<p style="float:right"><input style="width:150px" name="submit" type="submit" value="Submit" /></p>
</form>

					</div>
				</section>
				<!--//content-->
			</div>
			<!--//row-->
		</div>
		<!--//wrap-->
	</main>
	<!--//main-->

	<!--footer-->
	<footer class="foot" role="contentinfo">
		<div class="wrap clearfix">
			<div class="row">
				<article class="one-fourth">
					<h5>Need help?</h5>
					<p>Contact us via phone or email</p>
					<p><em>T:</em>  +1 713 WAT 2EAT<br /><em>E:</em>  <a href="#">RecipesRUs@recipes.com</a></p>
				</article>
				<article class="one-fourth">
					<h5>Follow us</h5>
					<ul class="social">
						<li class="facebook"><a href="#" title="facebook">facebook</a></li>
					</ul>
				</article>
			</div>
		</div>
	</footer>
	<!--//footer-->
	
	<!--preloader-->
	<div class="preloader">
		<div class="spinner"></div>
	</div>
	<!--//preloader-->
	
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/jquery.uniform.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/scripts.js"></script>
	<script>new WOW().init();</script>		
</body>
</html>
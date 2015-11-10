<?php
	require_once('auth.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="keywords" content="Ingredients - Social Recipe HTML Template" />
	<meta name="description" content="Ingredients - Social Recipe HTML Template">
	<meta name="author" content="notenoughingredients.com">
	
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
</head>
<body>
	<!--header-->
	<header class="head" role="banner">
		<!--wrap-->
		<div class="wrap clearfix">
			<a href="index.php" title="Ingredients" class="logo"><img src="images/ico/logo.png" alt="Ingredients logo" /></a>
			
			<nav class="main-nav" role="navigation" id="menu">
				<ul>
					<li class="current-menu-item"><a href="index.php" title="Home"><span>Home</span></a></li>
					<li><a href="recipes.html" title="Recipes"><span>Recipes</span></a>
					<ul><li><a href="recipes2.html" title="Recipes 2">Recipes 2</a></li><li><a href="recipe.html" title="Recipe">Recipe</a></li></ul>
				</ul>
			</nav>
			
			<nav class="user-nav" role="navigation">
				<ul>
					<li class="light"><a href="find_recipe.html" title="Search for recipes"><i class="ico i-search"></i> <span>Search for recipes</span></a></li>
					<li class="medium"><a href="my_profile.html" title="My account"><i class="ico i-account"></i> <span>My account</span></a></li>
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
			<!--breadcrumbs-->
			

			<nav class="breadcrumbs">
				<ul>
					<li><a href="index-2.html" title="Home">Home</a></li>
					<li>My account</li>
				</ul>
			</nav>
			<!--//breadcrumbs-->
<?php
require_once('connection.php');
$id=$_SESSION['SESS_MEMBER_ID'];
$result3 = mysql_query("SELECT * FROM member where mem_id='$id'");
while($row3 = mysql_fetch_array($result3))
{ 
$fname=$row3['fname'];
$lname=$row3['lname'];
$address=$row3['address'];
$contact=$row3['contact'];
$picture=$row3['picture'];
$gender=$row3['gender'];
}
?>
<p style="text-align:right;font-size:20px;font-weight:bold;color:#FF7B74">Welcome <?php echo $fname ?> </p>
<table width="398" border="0" align="center" cellpadding="0">
  <tr>
    <td style="border:0;background:#FF7B74;color:white" height="26" colspan="2"><p style="font-weight:bold;font-size:20px"><?php echo $fname ?> - Profile Information</p> </td>
	<td style="border:0;"><div align="right"><a href="logout.php">logout</a></div></td>
  </tr></table>
<table width="398" border="0" align="center" cellpadding="0">
  <tr>
    <td width="129" rowspan="5"><img src="/uploads/<?php echo $picture ?>" width="129" height="129" alt="no image found"/></td>
    <td width="82" valign="top"><div align="left">FirstName:</div></td>
    <td style="border-bottom:1px solid white;background:#FF7B74;color:white" width="165" valign="top"><?php echo $fname ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">LastName:</div></td>
    <td style="border-bottom:1px solid white;background:#FF7B74;color:white" valign="top"><?php echo $lname ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Gender:</div></td>
    <td style="border-bottom:1px solid white;background:#FF7B74;color:white" valign="top"><?php echo $gender ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Address:</div></td>
    <td style="border-bottom:1px solid white;background:#FF7B74;color:white" valign="top"><?php echo $address ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Contact No.: </div></td>
    <td style="border-bottom:1px solid white;background:#FF7B74;color:white" valign="top"><?php echo $contact ?></td>
  </tr>
</table>
<p align="center"><a href="index.php"></a></p>

<center>
<table style="width:400px">
<tr>
<td style="background:#FF7B74;text-align:center;font-weight:bold"><a href="recipes2.html" title="My recipes" style="color:white">My recipes</a></td>
<td style="background:#FF7B74;text-align:center;font-weight:bold"><a href="pantry.php" title="My Pantry" style="color:white">My Pantry</a></td>
</tr>
</table>
</center>
						

			<!--content-->
			<section class="content">
				<!--row-->
				<div class="row">
					<!--profile left part-->
					
					<!--//profile left part-->
					
					<div class="three-fourth wow fadeInRight">
						
						
						<!--about-->
						<div class="tab-content" id="about">
							
						</div>
						<!--//about-->
					
						<!--my recipes-->
						
						<!--//my recipes-->
					
					</div>
				</div>
				<!--//row-->
			</section>
			<!--//content-->
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
					<p><em>T:</em>713 WAT-2EAT<br /><em>E:</em>  <a href="#">RecipesRUs@gmail.com</a></p>
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
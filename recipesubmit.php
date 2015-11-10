<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="keywords" content="Ingredients - Social Recipe HTML Template" />
	<meta name="description" content="Ingredients - Social Recipe HTML Template">
	<meta name="author" content="notenoughingredients.com">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<title>Ingredients</title>
	
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/animate.css" />
	<link href="http://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,800" rel="stylesheet">
	<link rel="shortcut icon" href="images/favicon.ico" />
	<link rel="stylesheet" href="\Imagephp\style.css" type="text/css" />
	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
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
						<ul>
							<li><a href="recipes2.html" title="Recipes 2">Recipes 2</a></li><li><a href="recipe.html" title="Recipe">Recipe</a></li>
							<li><a href="members_recipe.php" title="Members Recipes">Members Recipes</a></li>
						</ul>
					</li>
					<li><a href="#" title="Features"><span>Pantry</span></a>
					</li>
				<!--	<li><a href="blog.html" title="Blog"><span>Blog</span></a> -->
						<ul>
							<li><a href="blog_single.html" title="Blog post">Blog post</a></li>
						</ul>
					</li>
				<!--	<li><a href="contact.php" title="Contact"><span>Contact</span></a></li> -->
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
			<!--breadcrumbs-->
			<nav class="breadcrumbs">
				<ul>
					<li><a href="index-2.html" title="Home">Home</a></li>
					<li>Submit a recipe</li>
				</ul>
			</nav>
			<!--//breadcrumbs-->
			
			<!--row-->
			<div class="row">
				<header class="s-title">
					<h1><a href="recipe.php">Add a new recipe</a></h1>
				</header>
					
				<!--content-->
				<section class="content full-width wow fadeInUp">
					<div class="submit_recipe container">
	<?php
include_once 'dbconfig.php';
?>
<form action="upload.php" method="post" enctype="multipart/form-data">
<section>
								<h2>Basics</h2>
								<p>All fields are required.</p>
								<div class="f-row">
									<div class="full"><input type="text" name="title" placeholder="Recipe title" /></div>
								</div>
								<div class="f-row">
									<div class="third"><input type="text" name="ti" placeholder="Preparation time" /></div>
									<div class="third"><input type="text" name="cooktime" placeholder="Cooking time" /></div>
									<div class="third"><input type="text" name="easy" placeholder="Difficulty / Easy" /></div>
								</div>
								<div class="f-row">
									<div class="third"><input type="text" name="people" placeholder="Serves how many people?" /></div>
									<div class="third"><input type="text" name="category" placeholder="Category" /></div>
								</div>
							</section>
							
							<section>
								<h2>Description</h2>
								<div class="f-row">
									<div class="full"><textarea name="description" placeholder="Recipe Description"></textarea></div>
								</div>
							</section>	
							
							<section>
								<h2>Ingredients</h2>
								<div class="f-row ingredient">
									<div class="large"><input type="text" name="ing1" placeholder="Ingredient" /></div>
									<div class="small"><input type="text" name="qty" placeholder="Quantity" /></div>
								</div>
							</section>	
							
							<section>
								<h2>Instructions <span>(enter instructions, each step at a time)</span></h2>
								<div class="f-row instruction">
								<div class="full"><textarea name="instruction" placeholder="Instructions" rows=2 cols=20></textarea>
								</div>
							</section>
							
							<section>
								<h2>Photo</h2>
								<div class="f-row full">
									<input type="file" name="file">
								</div>
							</section>	
							
							<section>
								<h2>Status <span>(Are you ready to publish it?)</span></h2>
								<div class="f-row full">
								<input type="checkbox" name="publish" value="Publish">I am ready to publish this recipe
								</div>
							</section>
							
							<div class="f-row full">
								<input type="submit" class="button" id="submitRecipe" name="btn-upload" value="Publish this recipe" />
							</div>
 
 </form>
    <br /><br />
    <?php
 if(isset($_GET['success']))
 {
  ?>
        <label>Recipe Uploaded Successfully...  <a href="view.php">click here to view file.</a></label>
        <?php
 }
 else if(isset($_GET['fail']))
 {
  ?>
        <label>Problem While File Uploading !</label>
        <?php
 }
 else
 {
  ?>
        
        <?php
 }
?>

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
			<!--	<article class="one-half">
					<h5>About Recipes Community</h5>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci.</p>
				</article> -->
				<article class="one-fourth">
					<h5>Need help?</h5>
					<p>Contact us via phone or email</p>
					<p><em>T:</em>  713 WAT-2EAT<br /><em>E:</em>  <a href="#">RecipesRUS@recipes.com</a></p>
				</article>
				<article class="one-fourth">
					<h5>Follow us</h5>
					<ul class="social">
						<li class="facebook"><a href="#" title="facebook">facebook</a></li>
					<!--	<li class="youtube"><a href="#" title="youtube">youtube</a></li>
						<li class="rss"><a href="#" title="rss">rss</a></li>
						<li class="gplus"><a href="#" title="gplus">google plus</a></li>
						<li class="linkedin"><a href="#" title="linkedin">linkedin</a></li>
						<li class="twitter"><a href="#" title="twitter">twitter</a></li>
						<li class="pinterest"><a href="#" title="pinterest">pinterest</a></li>
						<li class="vimeo"><a href="#" title="vimeo">vimeo</a></li> -->
					</ul>
				</article>
				
				<div class="bottom">
					<p class="copy">Copyright 2015-2016 Recipes. All rights reserved</p>
					
					<nav class="foot-nav">
						<ul>
							<li><a href="index-2.html" title="Home">Home</a></li>
							<li><a href="recipes.html" title="Recipes">Recipes</a></li>
							<li><a href="blog.html" title="Blog">Blog</a></li>
							<li><a href="contact.php" title="Contact">Contact</a></li>
							<li><a href="newsletter.php" title="Contact">newsletter Subscription</a></li>    
							<li><a href="find_recipe.html" title="Search for recipes">Search for recipes</a></li>
							<li><a href="login.php" title="Login">Login</a></li>	<li><a href="register.php" title="Register">Register</a></li>													
						</ul>
					</nav>
				</div>
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
<?php
include_once 'dbconfig.php';
$get=mysql_query("SELECT ing1 FROM recipe");
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
	<script type="text/javascript" src="https://ajax.microsoft.com/ajax/jQuery/jquery-1.4.2.min.js"></script>
			
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
						</ul>
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
					<li>Search for Recipes</li>
				</ul>
			</nav>
			<!--//breadcrumbs-->

<!-- Bala -->

<?php
include_once 'dbconfig.php';
$get=mysql_query("SELECT ing1 FROM recipe");
?>
<?php
            while($row = mysql_fetch_assoc($get))
            {
            $option .= '<option>'.$row['ing1'].'</option>';
}
?>	

			<!--row-->
			<div class="row">
				<header class="s-title wow fadeInLeft">
					<h1>Search for Recipes</h1>
				</header>
				
				<!--content-->
				<section class="content full-width wow fadeInUp">
					<!--recipefinder-->
					<div class="container recipefinder">
					
						
<?php
include_once 'dbconfig.php';
$get=mysql_query("SELECT ing1 FROM recipe");
?>
<?php
            while($row = mysql_fetch_assoc($get))
            {
            $option .= '<option>'.$row['ing1'].'</option>';
            
}
?>

<div class="row">

<div style="position:relative;float:left;">
<form action='recipesearch.php' method="post">
<h3>Search by ingredients</h3>
<p>
<select name='searchsa[]' size=10 multiple style="width:250px;height:150px">
<?php echo $option; ?>
</select>
</p>
<input type="submit" value="Search Recipe" />
</form>
</div>

<!-- Title Search Form start -->
<div style="position:relative;float:left;width:500px;margin-left:50px;">
<form action='recipesearch.php' method="post">
<h3">Search Directly</h3>
<p>
<input type="text" value="Find the recipe by name" name="title">
</p>
<input type="submit" value="Search Recipe" />
</form>
</div>
<!-- Title Search Form End -->

<!-- Category Search Form Start -->
<?php
include_once 'dbconfig.php';
$get1=mysql_query("SELECT category FROM recipe");
?>
<?php
            while($row = mysql_fetch_assoc($get1))
            {
            $option1 .= '<option>'.$row['category'].'</option>';
            
}
?>
<div style="position:relative;float:left;margin-left:50px;">
<form action='recipesearch.php' method="post">
<h3">Search by Category</h3>
<p>
<select name='category' >
<?php echo $option1; ?>
</select>
</p>
<input type="submit" value="Search Recipe" />
</form>
</div>
<!-- Category Search Form End -->
</div>


						</div>
					</div>

<!-- Ingredient Search start -->
<div style="position:relative;float:left;width:1000px;">
<?php 
//load database connection
    $host = "localhost";
    $user = "ingredients";
    $password = "IngredientS@123";
    $database_name = "ingredients";
    $pdo = new PDO("mysql:host=$host;dbname=$database_name", $user, $password, array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ));
// Search from MySQL database table
$searchsa=$_POST['searchsa'];
//print_r($searchsa);
$max = sizeof($searchsa);

echo "<p style='font-size:18px;font-weight:bold;'>Search by Ingredients</p> "; 

for($i=0;$i<$max;$i++)
{
$var=$searchsa[$i];
$query = $pdo->prepare("select * from recipe where ing1 LIKE '%$var%'  LIMIT 10");
$query->bindValue(1, "%$search%", PDO::PARAM_STR);
$query->execute();

// Display search result
         if (!$query->rowCount() == 0) {
			
            while ($results = $query->fetch()) {
            			        
            			echo "<table style=\"font-family:arial;color:#333333;width:250px;float:left;margin-right:50px;\">";
				echo "<tr><td style=\"background:rgb(244, 113, 106) none repeat scroll 0% 0%;color:white;text-align:center;font-weight:bold\">";			
               			echo $results['title'];
                		echo "</td></tr>";
				echo "<tr><td>";
				echo '<a href="view.php">';
                 		echo '<img src="uploads/' . $results['file'] . '" style="width:250px;margin:0 auto;" />';
                 		echo '</a>';
				echo "</td></tr>";				
				echo "</table>";	
            }
					
				               
        } else {
            echo 'Nomatch found';
        }
//Loop End
}
?>
</div>
<!-- Ingredient Search end -->

<!-- Category Search Start -->
<div style="position:relative;float:left;width:1000px;">
<?php 
//load database connection
    $host = "localhost";
    $user = "ingredients";
    $password = "IngredientS@123";
    $database_name = "ingredients";
    $pdo = new PDO("mysql:host=$host;dbname=$database_name", $user, $password, array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ));
// Search from MySQL database table
$category=$_POST['category'];

echo "<p style='font-size:18px;font-weight:bold;'>Search by Category</p> "; 

$query = $pdo->prepare("select * from recipe where category LIKE '%$category%'  LIMIT 10");
$query->bindValue(1, "%$search%", PDO::PARAM_STR);
$query->execute();
// Display search result
         if (!$query->rowCount() == 0) {
        			
            while ($results = $query->fetch()) {
            			
            			echo "<table style=\"font-family:arial;color:#333333;width:250px;float:left;margin-right:50px;\">";
				echo "<tr><td style=\"background:rgb(244, 113, 106) none repeat scroll 0% 0%;color:white;text-align:center;font-weight:bold\">";			
               			echo $results['title'];
                		echo "</td></tr>";
				echo "<tr><td>";
				echo '<a href="view.php">';
                 		echo '<img src="uploads/' . $results['file'] . '" style="width:250px;margin:0 auto;" />';
                 		echo '</a>';
				echo "</td></tr>";				
				echo "</table>";	
            }
					
				               
        } else {
            echo 'Nomatch found';
        }
//Loop End

?>
</div>
<!-- Category Search End -->

<!-- Title Search End -->
<div style="position:relative;float:left;width:1000px;">
<?php 
//load database connection
    $host = "localhost";
    $user = "ingredients";
    $password = "IngredientS@123";
    $database_name = "ingredients";
    $pdo = new PDO("mysql:host=$host;dbname=$database_name", $user, $password, array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ));
// Search from MySQL database table
$title=$_POST['title'];

echo "<p style='font-size:18px;font-weight:bold;'>Search by Title</p> "; 

$query = $pdo->prepare("select * from recipe where title LIKE '%$title%'  LIMIT 10");
$query->bindValue(1, "%$search%", PDO::PARAM_STR);
$query->execute();
// Display search result
         if (!$query->rowCount() == 0) {
        			
            while ($results = $query->fetch()) {
            			
            			echo "<table style=\"font-family:arial;color:#333333;width:250px;float:left;margin-right:50px;\">";
				echo "<tr><td style=\"background:rgb(244, 113, 106) none repeat scroll 0% 0%;color:white;text-align:center;font-weight:bold\">";			
               			echo $results['title'];
                		echo "</td></tr>";
				echo "<tr><td>";
				echo '<a href="view.php">';
                 		echo '<img src="uploads/' . $results['file'] . '" style="width:250px;margin:0 auto;" />';
                 		echo '</a>';
				echo "</td></tr>";				
				echo "</table>";	
            }
					
				               
        } else {
            echo 'Nomatch found';
        }
//Loop End

?>
<!-- Title Search End -->

					<!--//recipefinder-->



					<!--results-->
					<div class="entries row">
						<!--item-->
						<div class="entry one-fourth wow fadeInLeft">
							<figure>
								<img src="images/img6.jpg" alt="" />
								<figcaption><a href="recipe.html"><i class="ico i-view"></i> <span>View recipe</span></a></figcaption>
							</figure>
							<div class="container">
								<h2><a href="recipe.html">Thai fried rice with fruit and vegetables</a></h2> 
								<div class="actions">
									<div>
										<div class="difficulty"><i class="ico i-medium"></i><a href="#">medium</a></div>
										<div class="likes"><i class="ico i-likes"></i><a href="#">10</a></div>
										<div class="comments"><i class="ico i-comments"></i><a href="recipe.html#comments">27</a></div>
									</div>
								</div>
							</div>
						</div>
						<!--item-->
						
						<!--item-->
						<div class="entry one-fourth wow fadeInLeft" data-wow-delay=".2s">
							<figure>
								<img src="images/img5.jpg" alt="" />
								<figcaption><a href="recipe.html"><i class="ico i-view"></i> <span>View recipe</span></a></figcaption>
							</figure>
							<div class="container">
								<h2><a href="recipe.html">Spicy Morroccan prawns with cherry tomatoes</a></h2> 
								<div class="actions">
									<div>
										<div class="difficulty"><i class="ico i-hard"></i><a href="#">hard</a></div>
										<div class="likes"><i class="ico i-likes"></i><a href="#">10</a></div>
										<div class="comments"><i class="ico i-comments"></i><a href="recipe.html#comments">27</a></div>
									</div>
								</div>
							</div>
						</div>
						<!--item-->
						
						<!--item-->
						<div class="entry one-fourth wow fadeInLeft" data-wow-delay=".4s">
							<figure>
								<img src="images/img8.jpg" alt="" />
								<figcaption><a href="recipe.html"><i class="ico i-view"></i> <span>View recipe</span></a></figcaption>
							</figure>
							<div class="container">
								<h2><a href="recipe.html">Super easy blueberry cheesecake</a></h2> 
								<div class="actions">
									<div>
										<div class="difficulty"><i class="ico i-easy"></i><a href="#">easy</a></div>
										<div class="likes"><i class="ico i-likes"></i><a href="#">10</a></div>
										<div class="comments"><i class="ico i-comments"></i><a href="recipe.html#comments">27</a></div>
									</div>
								</div>
							</div>
						</div>
						<!--item-->
						
						<!--item-->
						<div class="entry one-fourth wow fadeInLeft" data-wow-delay=".6s">
							<figure>
								<img src="images/img7.jpg" alt="" />
								<figcaption><a href="recipe.html"><i class="ico i-view"></i> <span>View recipe</span></a></figcaption>
							</figure>
							<div class="container">
								<h2><a href="recipe.html">Refreshing banana split, with a twist!</a></h2> 
								<div class="actions">
									<div>
										<div class="difficulty"><i class="ico i-hard"></i><a href="#">hard</a></div>
										<div class="likes"><i class="ico i-likes"></i><a href="#">10</a></div>
										<div class="comments"><i class="ico i-comments"></i><a href="recipe.html#comments">27</a></div>
									</div>
								</div>
							</div>
						</div>
						<!--item-->
						
						<!--item-->
						<div class="entry one-fourth wow fadeInLeft" data-wow-delay=".8s">
							<figure>
								<img src="images/img3.jpg" alt="" />
								<figcaption><a href="recipe.html"><i class="ico i-view"></i> <span>View recipe</span></a></figcaption>
							</figure>
							<div class="container">
								<h2><a href="recipe.html">Sushi mania, best sushi ever!</a></h2> 
								<div class="actions">
									<div>
										<div class="difficulty"><i class="ico i-hard"></i><a href="#">hard</a></div>
										<div class="likes"><i class="ico i-likes"></i><a href="#">10</a></div>
										<div class="comments"><i class="ico i-comments"></i><a href="recipe.html#comments">27</a></div>
									</div>
								</div>
							</div>
						</div>
						<!--item-->
						
						<!--item-->
						<div class="entry one-fourth wow fadeInLeft" data-wow-delay="1s">
							<figure>
								<img src="images/img4.jpg" alt="" />
								<figcaption><a href="recipe.html"><i class="ico i-view"></i> <span>View recipe</span></a></figcaption>
							</figure>
							<div class="container">
								<h2><a href="recipe.html">Princess puffs - an old classic at its best</a></h2> 
								<div class="actions">
									<div>
										<div class="difficulty"><i class="ico i-hard"></i><a href="#">hard</a></div>
										<div class="likes"><i class="ico i-likes"></i><a href="#">10</a></div>
										<div class="comments"><i class="ico i-comments"></i><a href="recipe.html#comments">27</a></div>
									</div>
								</div>
							</div>
						</div>
						<!--item-->
						
						<!--item-->
						<div class="entry one-fourth wow fadeInLeft" data-wow-delay="1.2s">
							<figure>
								<img src="images/img13.jpg" alt="" />
								<figcaption><a href="recipe.html"><i class="ico i-view"></i> <span>View recipe</span></a></figcaption>
							</figure>
							<div class="container">
								<h2><a href="recipe.html">Tasty salmon apetizers with sour cream</a></h2> 
								<div class="actions">
									<div>
										<div class="difficulty"><i class="ico i-easy"></i><a href="#">easy</a></div>
										<div class="likes"><i class="ico i-likes"></i><a href="#">10</a></div>
										<div class="comments"><i class="ico i-comments"></i><a href="recipe.html#comments">27</a></div>
									</div>
								</div>
							</div>
						</div>
						<!--item-->
						
						<!--item-->
						<div class="entry one-fourth  wow fadeInLeft" data-wow-delay="1.4s">
							<figure>
								<img src="images/img14.jpg" alt="" />
								<figcaption><a href="recipe.html"><i class="ico i-view"></i> <span>View recipe</span></a></figcaption>
							</figure>
							<div class="container">
								<h2><a href="recipe.html">An incredible vegetarian hamburger</a></h2> 
								<div class="actions">
									<div>
										<div class="difficulty"><i class="ico i-easy"></i><a href="#">easy</a></div>
										<div class="likes"><i class="ico i-likes"></i><a href="#">10</a></div>
										<div class="comments"><i class="ico i-comments"></i><a href="recipe.html#comments">27</a></div>
									</div>
								</div>
							</div>
						</div>
						<!--item-->
						
						<!--item-->
						<div class="entry one-fourth wow fadeInLeft" data-wow-delay="1.6s">
							<figure>
								<img src="images/img15.jpg" alt="" />
								<figcaption><a href="recipe.html"><i class="ico i-view"></i> <span>View recipe</span></a></figcaption>
							</figure>
							<div class="container">
								<h2><a href="recipe.html">Spaghetti carbonara with rustic bread</a></h2> 
								<div class="actions">
									<div>
										<div class="difficulty"><i class="ico i-medium"></i><a href="#">medium</a></div>
										<div class="likes"><i class="ico i-likes"></i><a href="#">10</a></div>
										<div class="comments"><i class="ico i-comments"></i><a href="recipe.html#comments">27</a></div>
									</div>
								</div>
							</div>
						</div>
						<!--item-->
						
						<!--item-->
						<div class="entry one-fourth wow fadeInLeft" data-wow-delay="1.8s">
							<figure>
								<img src="images/img16.jpg" alt="" />
								<figcaption><a href="recipe.html"><i class="ico i-view"></i> <span>View recipe</span></a></figcaption>
							</figure>
							<div class="container">
								<h2><a href="recipe.html">Homemade cheesy spinach pizza with an egg on top</a></h2> 
								<div class="actions">
									<div>
										<div class="difficulty"><i class="ico i-medium"></i><a href="#">medium</a></div>
										<div class="likes"><i class="ico i-likes"></i><a href="#">10</a></div>
										<div class="comments"><i class="ico i-comments"></i><a href="recipe.html#comments">27</a></div>
									</div>
								</div>
							</div>
						</div>
						<!--item-->
						
						<!--item-->
						<div class="entry one-fourth wow fadeInLeft" data-wow-delay="2s">
							<figure>
								<img src="images/img17.jpg" alt="" />
								<figcaption><a href="recipe.html"><i class="ico i-view"></i> <span>View recipe</span></a></figcaption>
							</figure>
							<div class="container">
								<h2><a href="recipe.html">Heavenly light and creamy vanilla tart</a></h2> 
								<div class="actions">
									<div>
										<div class="difficulty"><i class="ico i-hard"></i><a href="#">hard</a></div>
										<div class="likes"><i class="ico i-likes"></i><a href="#">10</a></div>
										<div class="comments"><i class="ico i-comments"></i><a href="recipe.html#comments">27</a></div>
									</div>
								</div>
							</div>
						</div>
						<!--item-->
						
						<!--item-->
						<div class="entry one-fourth wow fadeInLeft" data-wow-delay="2.2s">
							<figure>
								<img src="images/img18.jpg" alt="" />
								<figcaption><a href="recipe.html"><i class="ico i-view"></i> <span>View recipe</span></a></figcaption>
							</figure>
							<div class="container">
								<h2><a href="recipe.html">Exquisite plum and cherry pie</a></h2> 
								<div class="actions">
									<div>
										<div class="difficulty"><i class="ico i-medium"></i><a href="#">medium</a></div>
										<div class="likes"><i class="ico i-likes"></i><a href="#">10</a></div>
										<div class="comments"><i class="ico i-comments"></i><a href="recipe.html#comments">27</a></div>
									</div>
								</div>
							</div>
						</div>
						<!--item-->
						
						<div class="quicklinks">
							<a href="#" class="button">More recipes</a>
							<a href="javascript:void(0)" class="button scroll-to-top">Back to top</a>
						</div>
					</div>
					<!--//results-->
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
<?php
$servername = "localhost";
$username = "ingredients";
$password = "IngredientS@123";
$dbname = "ingredients";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT * from recipe";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    
    while($row = $result->fetch_assoc()) {
	echo "<table class='recipetable'>";
        echo "<tr><td class='recipetitle' style='background:#F4716A;'>"  . $row["title"]. "</td></tr>"; 
        echo "</table>";
        echo "<div align=center><img style='width:300px;' src=\"../recipes/images/Braciola-de-Pollo.jpg\" alt=\"bla bla\" ></div>";
	echo "<table style='max-width:800px;margin:0 auto; text-align:justify;margin-top:20px;margin-bottom:20px;'>";
        echo "<tr><td class='recipecat'><p class='recipetxt'>Preperation Time</p>  "   . $row["ti"]. "</td><td class='recipecat'><p class='recipetxt'>Cooking Time</p> " . $row["cooktime"]. "</td><td class='recipecat'><p class='recipetxt'>Category</p> " . $row["category"]. "</td></tr>";            
	echo "</table>";
	echo "<table class='recipedesc'>";
        echo "<tr><td><p class='recipetxt'>Description:</p> "  . $row["description"]. "</td></tr>";
        echo "<tr><td><p class='recipetxt'>Ingredients:</p>" . $row["ing1"]. "</td></tr>";
        echo "<tr><td><p class='recipetxt'>Instruction:</p> "  . $row["instruction"]. "</td></tr>";
        echo "</table>";
        
	echo "<img src=\"data:image/jpeg;base64,".base64_encode($row["image"])."\" alt=\"photo\"><br>";
    }
  echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" alt="photo"><br>';
     
} else {
    echo "0 results";
}


$conn->close();

?>
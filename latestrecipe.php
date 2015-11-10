<?php
include_once 'dbconfig.php';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<?php
 $sql="SELECT * FROM recipe";
 $result_set=mysql_query($sql);
 while($row=mysql_fetch_array($result_set))
 {
  ?>
  	<div style="float:left">
	<table>
        <tr>
        <td  style="width:200px;padding:10px;text-align:center;background:red;color:white" ><?php echo $row['title'] ?></td>
        </tr>
         <tr style="text-align:center">
        <td><img style="width:220px;" src="uploads/<?php echo $row['file'] ?>" ></td>
        </tr>
        </table>
        </div>
        <?php
        
 }
 ?>
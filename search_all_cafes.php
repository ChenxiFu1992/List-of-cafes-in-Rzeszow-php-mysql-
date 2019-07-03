<?php //    Errors now, check details
?>
<head> <!------ use the style ------>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<!---------------------------------------------------------------------------------------------------->
<!-----------------------------      Back to main page     --------------------------------->
<a href="index.php" class="btn btn-block btn-primary">Back to main page</a><br>

<?php
include "connect_to_database.php";
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "\n";

//////////////////////////// Display data from MySQL ////////////////////////////////////////

$sql = "SELECT id, name, address, opening_hours, website, keyword FROM cafes_table";
$result = $mysqli->query($sql);
?>
<?php
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
	
		echo "<br>$row[id] . 【Cafe's name】 " . $row["name"]. "【Opening hours】 " . $row["opening_hours"]." 【Address】 " . $row["address"]. " " . "【Website】". $row["website"]. " 【Keywords】 " . $row["keyword"]."<br> <br>";		
		echo "<td><a href=edit_cafe.php?id=".$row['id'];?> class="btn btn-success"> Edit </a></td>&nbsp &nbsp &nbsp &nbsp	
<?php "<input type=hidden name=id value='".$row['id']."'>";   ?>   
<?php	echo "<td><a href=delete_cafe.php?id=".$row['id'];?> class="btn btn-danger"> Delete </a></td><br></br>

<?php	
	}
} else {
    echo "0 results";
}
?>
<!----------------------------- Button clicked, go back to main page     --------------------------------->
<!--a href = "index.php"><br> Return to main page </a>-->
<a href="index.php" class="btn btn-block btn-primary">Back to main page</a>

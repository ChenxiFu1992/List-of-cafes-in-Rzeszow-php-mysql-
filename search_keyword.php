<html><!--- NO ERRORS ------------------------------->

<head>   <!------ use the style ------>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<!-----------------------------      Back to main page     --------------------------------->
<a href="index.php" class="btn btn-block btn-primary">Back to main page</a><br>

<?php
/////////////////// This doc. works without errors

//Connect to database
include "connect_to_database.php";	
$keywordFromForm = $_GET["keyword_search"];


/////////////////////////////// search from keyword which inputed by user /////////////////////////////
//////////////////////////// Display data from MySQL ////////////////////////////////////////
echo "<h2> Show All Cafes With Keyword '$keywordFromForm' </h2>";

$sql = "SELECT id, name, open_hours, address, contact, keyword 
FROM cafes_table
WHERE keyword LIKE '%" . $keywordFromForm . "%' 
OR name LIKE '%" . $keywordFromForm . "%'
OR open_hours LIKE '%" . $keywordFromForm . "%'
OR contact LIKE '%" . $keywordFromForm . "%'
OR address LIKE '%" . $keywordFromForm . "%'";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "$row[id] . 【Cafe's name】 " . $row["name"]. "【Address】 " . $row["address"]." 【Opening hours】 " . $row["open_hours"]. " " . "【Contact】". $row["contact"]. " 【Keywords】 " . $row["keyword"]."<br><br>";
	}
} else {
    echo "0 results";
}

?>


</body>

</html>
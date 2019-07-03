<html>

<head>   <!------ use the style ------>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<!---------------------------------------------------------------------------------------------------->
</head>

<body>
<?php
//connect to database "test"
include "connect_to_database.php";
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "\n";
////////////////////////////////////////
?>

<?php
$new_name = $_GET["newname"];
$new_opening_hours = $_GET["newopenhours"];
$new_address = $_GET["newaddress"];
$new_website = $_GET["newwebsite"];
$new_keyword = $_GET["newkeyword"];

///////////////////////using the addslashes function
$new_name = addslashes(&new_name);
$$new_opening_hours = addslashes ($new_opening_hours);
$$new_address = addslashes($new_address);
$$new_website = addslashes（$new_website);
$$new_keyword = addslashes（$new_keyword)；


/////////////////////////////// add new cafe's info /////////////////////////////


$sql = "INSERT INTO cafes_table (id, name, opening_hours, address, website, keyword) 
VALUES (NULL, '$new_name', '$new_opening_hours', '$new_address', '$new_website', '$new_keyword')" or die(mysql_error());
$result = $mysqli->query($sql) or die(mysqli_error($mysql));
?>


<!-----------------------------      Back to main page (Button)     --------------------------------->
<a href="index.php" class="btn btn-block btn-primary">Back to main page</a><br>

<!-----------------------------      Back to list(Button)   --------------------------------->
<a href="search_all_cafes.php" class="btn btn-block btn-primary">Back to list of ALL cafes</a>

</body>

</html>
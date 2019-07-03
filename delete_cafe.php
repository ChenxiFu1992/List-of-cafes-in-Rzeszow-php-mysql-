<!---------------- This doc works without errors --------------------------------->


<html>
<head> <!------ use the style ------>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<?php
//connect to database
$con = mysqli_connect('localhost','root','usbw');
mysqli_select_db($con, 'test');

//select query
$sql = "DELETE FROM cafes_table WHERE id='$_GET[id]'";

//execute the query
if(mysqli_query($con,$sql))
	header("refresh:1; url=search_all_cafes.php");
else
	echo "Not deleted.";

?>
<!-----------------------------      Back to main page     --------------------------------->
</br>
<a href="index.php" class="btn btn-block btn-primary">Back to main page</a><br>

</html>
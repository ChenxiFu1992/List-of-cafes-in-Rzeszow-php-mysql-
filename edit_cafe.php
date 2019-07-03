<head> <!------ use the style ------>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>


<?php
/*     This doc doesn't work... So I comment all php codes. 
Can't pass the values from "search_all_cafes.php" by button clicked, to this page.
 */
//connect to database
//include "connect_to_database.php";

$con = mysqli_connect('localhost','root','usbw');
mysqli_select_db($con, 'test');

$sql = "UPDATE cafes_table 
SET name='$_POST[editname]', 
address='$_POST[editaddress]', 
opening_hours='$_POST[editopenhours]', 
website='$_POST[editwebsite]', 
keyword='$_POST[editkeyword]'
WHERE id=$_POST[id]";




//Go back to list of ALL cafes
if(mysqli_query($con,$sql))
	header("refresh:1; url=search_all_cafes.php");
else
	echo "Update unsucessfully...";


?>


<!----- Edit + Edit cafe: input form + submit button are here ---------->
<form class="form-horizontal" method="POST" action="edit_cafe.php" >
<fieldset>

<legend>Edit cafe (Save+Update)</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="editname">Cafe's new name</label>  
  <div class="col-md-4">
  <input id="editname" name="editname" type="text" placeholder="<?php $_GET['name'] ?>" class="form-control input-md">
</div>

    
  </div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="editaddress">Cafe's new address</label>  
  <div class="col-md-4">
  <input id="editaddress" name="editaddress" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="editopenhours">New opening hours</label>  
  <div class="col-md-4">
  <input id="editopenhours" name="editopenhours" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="editwebsite">New website</label>  
  <div class="col-md-4">
  <input id="editwebsite" name="editwebsite" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="editkeyword">New keyword(s)</label>  
  <div class="col-md-4">
  <input id="editkeyword" name="editkeyword" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-------- Button: Update --------------->
<div class="form-group">
  <label class="col-md-4 control-label" for="update"></label>
  <div class="col-md-8">
    <button id="update" name="update" class="btn btn-success">Update</button>
</form>

<!-------- Button: Cancel, and go back to list page --------------->
<!--------------- form style: x new line ----------- style="margin:0px------->
<form style="margin:0px;display:inline;" action="search_all_cafes.php" >
    <button id="cancel" name="cancel" class="btn btn-danger">Cancel</button></br>
  </div>
</div>

</fieldset>
</form>
<!----------------------------- Button clicked, go back to main page     --------------------------------->
<!--a href = "index.php"><br> Return to main page </a>-->
<a href="index.php" class="btn btn-block btn-primary">Back to main page</a>

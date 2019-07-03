
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

<body>
<h1> List Of Cafes In Rzeszow ^_^ </h1>
<?php 
include "connect_to_database.php";
?>
<?php
///////////////////// HTML form /////////////////////////////////////////
?>



<!----------------------- go to "search keyword" page: No errors -------------------------------------------->
<form class="form-horizontal" action = "search_keyword.php"> 
<fieldset>

<legend>Search for a cafe</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="keyword">Search keyword</label>  
  <div class="col-md-5">
  <input id="keyword_search" name="keyword_search" type="text" placeholder="e.g. center" class="form-control input-md">
  <span class="help-block">(Please enter a keyword to search for...)</span>  
  </div>
</div>


<!----- Button  submit (keyword)------>
<div class="form-group">
  <label class="col-md-4 control-label" for="button1id"></label>
  <div class="col-md-8">
    <button id="button1id" name="button1id" class="btn btn-primary" >submit</button>
  </div>
</div>
</fieldset>
</form>
<form class="form-horizontal" action = "search_all_cafes.php"> 
   <button id="button2id" name="button2id" class="btn btn-primary">Show all cafes (Delete/Edit)</button>
<form>


<hr>
<!--------------------------------------------------------------------------------->



<!----------------------- add new cafe: errors, can't save data to mysql db ------------------------------->
<form class="form-horizontal"  action="add_cafe.php" method="get" >
<fieldset>

<!-- Form Name -->
<legend> Add a new cafe </legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="newname">Please enter a new cafe's name</label>  
  <div class="col-md-5">
  <input id="newname" name="newname" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="newopen_hours">Please enter its opening hours</label>  
  <div class="col-md-4">
  <input id="newopen_hours" name="newopen_hours" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="newaddress">Please enter its address</label>  
  <div class="col-md-4">
  <input id="newaddress" name="newaddress" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="newwebsite">Please enter its contact(s)</label>  
  <div class="col-md-4">
  <input id="newcontact" name="newcontact" type="text" placeholder="e.g.phone number/website..." class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="newkeyword">Please input this cafe's keyword(s)</label>  
  <div class="col-md-4">
  <input id="newkeyword" name="newkeyword" type="text" placeholder="e.g. center" class="form-control input-md">
    
  </div>
</div>
<!------------------- Button： Add ---------------------------------->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit_new"></label>
  <div class="col-md-4">
    <button id="submit_new" name="submit_new" type="submit" class="btn btn-primary">Add!</button>
  </div>
</div>

</fieldset>
</form>

<!--------------------------------------------------------------------------------------------->


</body>

</html>

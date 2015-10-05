<!DOCTYPE html>
<html lang="en">
  <head>
     <title>ParentCheck</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
  </head>

  <body>

<?php include 'nav.php';?>

    <div class="container offset7">

      <h1>Create your profile</h1>
      <p>Use this document as a way to quick start any new project.<br> All you get is this message and a barebones HTML document.</p>
	  
	  <br>
    <br>

<form class="form-horizontal" role="form">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-3">
        <input type="email" class="form-control" id="email" placeholder="Enter email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="Firstname">First name:</label>
      <div class="col-sm-3">
        <input type="email" class="form-control" id="inputFirstname" placeholder="Enter First name">
      </div>
    </div>
    <div class="form-group">
       <label class="control-label col-sm-2" for="Lastname">Last name:</label>
      <div class="col-sm-3">
        <input type="email" class="form-control" id="inputLastname" placeholder="Enter last name">
      </div>
    </div>
      <div class="col-sm-5">
   <button type="button" class="btn btn-success col-sm-10">Do it</button>
    </div>
</form>


<br>
<br>
	
	<form class="form-horizontal" role="form" method="post" action="createuser.php">
	
	<div class="control-group">
		<label class="control-label" for="inputFirstname"  >first name</label>
			<div class="controls">
				<input name="inputFirstname" id="inputFirstname" type="text" id="inputFirstname" placeholder="firstname" >
			</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="inputLastname" name= id= >last name</label>
			<div class="controls">
				<input name="inputLastname" id="inputLastname" type="text" id="inputLastname"  placeholder="lastname" >
			</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="inputUsername">User name</label>
			<div class="controls">
				<input name="inputUsername" id="inputUsername" type="text" id="inputUsername"  placeholder="Username" >
			</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="inputEmail">Email</label>
				<div class="controls">
					<input name="inputEmail" id="inputEmail"  type="text" id="inputEmail" placeholder="Email">
				</div>
	</div>
				
	<div class="control-group">
		<label class="control-label" for="inputPassword">Password</label>
			<div class="controls">
				<input name="inputPassword" id="inputPassword" type="password" id="inputPassword" placeholder="Password">
			</div>
	</div>	
	
	<div class="control-group">
		<div class="controls">
			<button type="submit" name="create" class="btn" >Submit</button>
		</div>
	</div>
	
	
	
    </form>
</div>


    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-alert.js"></script>
    <script src="assets/js/bootstrap-modal.js"></script>
    <script src="assets/js/bootstrap-dropdown.js"></script>
    <script src="assets/js/bootstrap-scrollspy.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>
    <script src="assets/js/bootstrap-tooltip.js"></script>
    <script src="assets/js/bootstrap-popover.js"></script>
    <script src="assets/js/bootstrap-button.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/bootstrap-carousel.js"></script>
    <script src="assets/js/bootstrap-typeahead.js"></script>

  </body>
</html>

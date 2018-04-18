<!DOCTYPE html>
<html>
<head>
	<title>Search Page</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">	
</head>
<body>
	<br>
	<div class="container page-header">
    <h1 class="text-center"><span class="blanc">Welcome to Search Page</span></h1>     
  </div>
  <br>
  <div class="container jumbotron">
  	<div>
  <h2>Search Any File!!!</h2></div>
  		<form action="includes/search.php" method="POST" >
		<input type="text" name="search" class="form-control" placeholder="Type the filename or anything which you remember of that file or Author name!" required><br>
		<button type = "submit" name="submit-search" class="btn btn-lg btn-success">Search</button>	
		<a href="home.php" class="btn btn-warning btn-lg float-right font-weight-bold" role="button">Return to Home page</a>
	</form>

</div>
<script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
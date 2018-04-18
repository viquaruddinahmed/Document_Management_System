<!DOCTYPE html>
<html>
<head>
  <title>Upload Files</title>
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">	
</head>
<body>
	<br><br>
	<div class="container page-header">
    <h1 class="text-center"><span class="blanc">Welcome to Upload Page</span></h1> 
   </div>
  <br>
  <div class="container jumbotron">   
  <div class="form-group">
  <form action="includes/upload.php" method="POST" enctype="multipart/form-data">
  	<h3>Please write keywords/what type of document it is:</h3>
  	<input type="text" name="keyword" class="form-control" placeholder="Enter Keywords like (java or C++ or Python)" required>
    <h3>Author or Source:</h3>
    <input type="text" name="author" class="form-control" placeholder="Enter Author or Professor or Source" required>
    <br>
    <input type="file" name="file" class="form-control" required><br>
    <button type="submit" name="submit" class="btn btn-lg btn-success">UPLOAD FILES!</button>
    <a href="includes/fetch.php" target="_blank" class="btn btn-info btn-lg" role="button">View all the files</a>
    <a href="home.php" class="btn btn-warning btn-lg float-right font-weight-bold" role="button">Return to Home page</a>
  </form>	
</div>
</div>

<script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
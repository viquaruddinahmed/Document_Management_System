<!DOCTYPE html>
<html>
<head>
	<title>Search Results</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">	
</head>
<body>
	<br>
	<div class="container page-header">
    <h1 class="text-center"><span class="blanc">Search Results!</span></h1>
    <a href="../home.php" class="btn btn-warning btn-lg" role="button"><span class="blank">Return to Home page</span></a>
    <a href="../searchhtml.php" class="btn btn-info btn-lg float-right" role="button">Go back</a>      
  </div>
  <br>
	<div class="container">
		 <table class="table table-bordered table-hover">
            <thead class="bg-warning">
                <tr>
                    <th class="text-center">Keywords / Document type</th>
                     <th class="text-center">Author</th>
                    <th class="text-center">File Name</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
<?php
	include "dbconnect.php";
	if(isset($_POST['submit-search'])) {
		$search = mysqli_real_escape_string($conn, $_POST['search']);
		$sql = "SELECT * FROM addfiles WHERE keyword LIKE '%$search%' OR filename LIKE '%$search%' OR author LIKE '%$search%'";
		$result = mysqli_query($conn, $sql);
		$queryResult = mysqli_num_rows($result);
		echo "<h2 class='blanc'> There are ".$queryResult." matching files! </h2>";
		if ($queryResult > 0) {
			while ($row = mysqli_fetch_assoc($result)){
				?>
					<tr>
                    <td class="bg-white font-weight-bold text-center"><?php echo $row['keyword'] ?> :-</td>
                    <td class="bg-white font-weight-bold"><?php echo $row['author'] ?></td>
                    <td class="bg-white font-weight-bold"><?php echo $row['filename'] ?></td>
                    <td class="text-center bg-white font-weight-bold"><a href="download.php?id=<?php echo $row['id'] ?>" class="btn btn-primary">Download</a></td>
                </tr>
                <?php	
			}
		}else{
			echo "There are no results matching your search!";
		}
	}

?>
</tbody>
</table>
</div>

<script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>


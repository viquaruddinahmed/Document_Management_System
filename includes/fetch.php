<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>All Files</title>
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">  
 
</head>
<body>
    <br>
    <div class="container page-header">
    <h1 class="text-center"><span class="blanc">List of All Files</span></h1> 
</div>
<div class="container">
    <a href="../home.php" class="btn btn-info btn-lg" role="button">Home</a>
    <a href="../uploadhtml.php" class="btn btn-info btn-lg float-right" role="button">Go back</a>
    <a href="../searchhtml.php" class="btn btn-danger btn-lg float-right" role="button">Search files</a>     
  </div>
<br>
    <div class="container">
        <table class="table table-bordered table-dark table-hover">
            <thead class="bg-danger">
                <tr>
                    <th class="text-center">ID</th>
                    <th class="text-center">Keywords / Document type</th>
                    <th class="text-center">Author</th>
                    <th class="text-center">File Name</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "config.php";
                $stmt = $db->prepare("select * from addfiles");
                $stmt->execute();
                while($row = $stmt->fetch()){
                ?>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['keyword'] ?></td>
                    <td><?php echo $row['author'] ?></td>
                    <td><?php echo $row['filename'] ?></td>
                    <td class="text-center"><a href="./download.php?id=<?php echo $row['id'] ?>" class="btn btn-primary">Download</a></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

   <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
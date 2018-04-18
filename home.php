<?php
  session_start();
?>
<html>
<head>
	<title>Home page</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/mainPage.css">

</head>
<body>
	<div>
<nav class="navbar navbar-inverse">
  <ul class="nav navbar-nav">
  </ul>
  <p class="navbar-text"><span id ="pad">Welcome To Ionis Document Management System</span></p>
</nav>
</div>
<div class="container">
<a type="button" class="btn btn-primary btn-lg" href="uploadhtml.php"><span class="color">UPLOAD</span></a>
<a type="button" class="btn btn-success btn-lg" href="searchhtml.php"><span class="color">SEARCH</span></a>
<a type="button" class="btn btn-warning btn-lg" href="http://idss.forumactif.com/" target="_blank"><span class="color">FORUM</span> </a>
</div>
</br>
<div class="container">
  <div class="jumbotron">
    <h2 class= "wit">INTRODUCTION</h2> 
    <p>Welcome to Document Management system for IONIS........</p> 
    <p>In this web platform you can upload, download and search for the documents related to schools in IONIS group. You can upload documents of multiple formats(.pdf, .exe, .zip, .docx etc.) including audio and video files. Also you can download the documents available.</br>
    You can search any document from the availabe documents in database by using author name, keywords or name of the file.<br> 
    Students could also discuss about a topic in the FORUM section.</p> 
  </div>
</div>

<footer class="navbar-inverse navbar-fixed-bottom">
 <div>

  <ul class="nav navbar-nav">
  </ul>
  <p class="navbar-text1"><span class ="foot">Copyrights IONIS:- &nbsp</span><span class= "foot glyphicon glyphicon-copyright-mark"></span><span class="foot"> &nbsp All Rights Reserved.</span></p>
</div>
</footer>

<script
	src="https://code.jquery.com/jquery-3.2.1.js"
	integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
	crossorigin="anonymous"></script>

	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>

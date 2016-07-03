<?php 
$rows = 10;
$cols = 10;
$color = 'yellow';


?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	
	<div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation" class="active"><a href="#">Home</a></li>
            <li role="presentation"><a href="#">About</a></li>
            <li role="presentation"><a href="#">Contact</a></li>
          </ul>
        </nav>
        <h3 class="text-muted">Project name</h3>
      </div>

      <div class="row marketing">
        <div class="col-lg-6">
          <?php
            table($rows, $cols, $color);
            table(5, 5, $color);
            table(15, 15, $color);
          ?>
        </div>
      </div>

    </div> <!-- /container -->

</body>
</html>
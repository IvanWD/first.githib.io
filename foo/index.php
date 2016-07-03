<?php
ob_start();
require_once "inc/functions.php";
require_once "inc/data.php";
require_once "inc/seo.php";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?=$title?></title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">
    <div class="header clearfix">
        <nav>

            <?php
            menu($menu);
            ?>
        </nav>
        <h3 class="text-muted">Project name</h3>
    </div>

    <?php if ( ifShowSlider($page) ): ?>
        <div class="jumbotron">
            <h1><?php echo $greet ?></h1>

            <p class="lead">
                <?=$page_title?>
            </p>
            <p><a class="btn btn-lg btn-success" href="#" role="button">Sign up today</a></p>
        </div>
    <?php else: ?>
        <h1><?=$page_title?></h1>
    <?php endif; ?>

    <div class="row marketing">
        <div class="col-lg-4">
            <?php menu($menu, true); ?>
        </div>

        <div class="col-lg-8">
            <?php include "views/" . $include; ?>
        </div>
    </div>

    <footer class="footer">
        <p>&copy; <?=$year?> Company, Inc.</p>
    </footer>

</div> <!-- /container -->

</body>
</html>
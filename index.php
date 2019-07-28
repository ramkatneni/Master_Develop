<!DOCTYPE html>
<html>
<head>
<?php include 'head.php';?>
</head>
<body>
<?php include 'navigation.php';?>

<div class="pages-stack">
<?php $pageStyle="page"?>
<?php include 'page/home.php';?>

<?php $pageStyle="page page--inactive"?>

<?php include 'page/collectible.php';?>

<?php include 'page/resumefile.php';?>
</div>

<?php include 'footer.php';?>

</body>
</head>
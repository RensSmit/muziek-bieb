<?php
$id = $_GET['id'];
echo $id;
require_once('../source/data.php');
$single = $library[$id - 1];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=	, initial-scale=1.0">
    <title>titel</title>
</head>

<body>
    <?php include('../source/card.php'); ?>
</body>

</html>
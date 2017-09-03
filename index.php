<?php
include 'fieldBuilder/Input.php';
include 'fieldBuilder/fieldOptions.php';
include 'fieldBuilder/Select.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Smart Kindlustusmaakler</title>
    <link rel="stylesheet" type="text/css" href="assets/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/global.css">
</head>
<body>
<nav>
    <div class="nav-wrapper pink darken-2">
        <div class="container">
            <a href="#" class="brand-logo">Smart Kindlustusmaakler</a>
        </div>
    </div>
</nav>
<div class="container">
    <div class="row">
        <form id="insurance" class="col s12" action="/">
            <div>
                <?php include_once 'clientStep.php';?>
                <?php include_once 'vehicleStep.php';?>
            </div>
        </form>
    </div>
</div>
<footer></footer>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="assets/js/modules/arrive.js"></script>
<script src="assets/js/modules/materialize.min.js"></script>
<script src="assets/js/modules/jquery.validate.min.js"></script>
<script src="assets/js/modules/jquery.steps.min.js"></script>
<script src="assets/js/functions.js"></script>
</body>
</html>
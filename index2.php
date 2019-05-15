<!DOCTYPE html>
<html lang="fi">
<head>
<title>PHP</title>
<link rel="stylesheet" href="oma.css" type="text/css">
</head>
<body>
<?php
$otsikko = "Tervetuloa sivulleni " . $_GET['name'];
?>
<h1>
    <?= $otsikko ?>
</h1>
<p>
    <?php  
    $name = "Tampere";
    echo "Hello $name";
    $vappulaskuri = 7;?>
    <br>
    <?= "vappuun on: " . $vappulaskuri . " päivää!!" ?>
    <?= "How are you $name"?>
</p>

</body>
</html>
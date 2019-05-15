<!DOCTYPE html>
<html lang="fi">
<head>
<title>PHP</title>
<link rel="stylesheet" href="oma.css" type="text/css">
</head>
<body>
<h1>Hello World</h1>
<p>
    <?= $greeting; ?>
</p>
<ul>
    <?php foreach($names as $name) {
     echo "<li>$name</li>";
    } ?>

<?php 
for ($x = 0; $x < sizeof($names); $x++) {
    echo "<li>$names[$x]</li>";
} 
?>
     
</ul>
</body>
</html> 


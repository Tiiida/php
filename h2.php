<?php require "header.php"; ?>
<h2> Bensalaskuri </h2>
<p>
<form action="h2.php" method="get">
Anna rahamäärä:<input type="number" name="euro"><br>
<input type="submit" value="Lähetä">
</form>
</p>
<?php
function laske($raha, $litrahinta) {
    $vastaus = round($raha/$litrahinta, 2);
    return $vastaus; 
}
if(isset($_GET['euro'])){
    $raha = $_GET['euro'];
    $litrahinta = 1.55;
    echo "tulos on " . laske($raha, $litrahinta) . " ";
}
?>

<?php require "footer.php"; ?>
<?php require "header.php"; ?>
<p>
<form action="h3.php" method="get">
        Anna rahamäärä: <input type="number" name="rahamäärä" maxlength=30><br>
        Anna loppusumma: <input type="number" name="loppusumma" maxlength=30><br>
        <input type="submit" value="Lähetä">
        <input type="hidden" name="form_submitted" value="1"/>
    </form>
<p>
<?php
function laske($rahamäärä, $loppusumma) {
    $vastaus = round($rahamäärä-$loppusumma, 2);
    return $vastaus; }
?>
<?php
if (isset($_GET['rahamäärä'], $_GET['loppusumma'])) {
    $rahamäärä = $_GET['rahamäärä'];
    $loppusumma = $_GET['loppusumma'];
    $vastaus = $rahamäärä-$loppusumma;
    if ($vastaus>= 0) {
        echo laske ($rahamäärä, $loppusumma, 2); 
    } else {
        echo "anna lisää rahaa!";
    }
}
?>

<?php require "footer.php"; ?>
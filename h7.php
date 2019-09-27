<?php require "header.php"; ?>

<p>
<form action="h7.php" method="post">
        Anna tehdyt tunnit: <input type="number" name="tunnit" maxlength=10><br>
        Anna tuntipalkka: <input type="number" name="palkka" maxlenght=10><br>
        Anna veroprosentti: <input type="number" name="prosentti" maxlenght=10><br>
        <input type="submit" value="Lähetä">
    </form>
</p>
<?php
if (isset($_POST["tunnit"], $_POST["palkka"], $_POST["prosentti"])) {
    $tunnit = $_POST["tunnit"];
    $palkka = $_POST["palkka"];
    $prosentti = $_POST["prosentti"];
    $bruttopalkka=$tunnit*$palkka;
    $vero=($bruttopalkka*$prosentti)/100;
    $netto=$bruttopalkka-$vero;
echo "$bruttopalkka <br>";
echo "$vero <br>";
echo $netto;
}
?>


<?php require "footer.php"; ?>


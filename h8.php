<?php require "header.php"; ?>

<p>
<form action="h8.php" method="post">
        Anna yksikköhinta: <input type="number" name="hinta" maxlength=10><br>
        Anna määrä: <input type="number" name="maara" maxlenght=10><br>
        Anna alennusprosentti: <input type="number" name="prosentti" maxlenght=10><br>
        <input type="submit" value="Lähetä">
    </form>
</p>
<?php
if (isset($_POST["hinta"], $_POST["maara"], $_POST["prosentti"])) {
    $hinta = $_POST["hinta"];
    $maara = $_POST["maara"];
    $prosentti = $_POST["prosentti"];
    $loppusumma=$hinta*$maara;
    $alennus=($loppusumma*$prosentti)/100;
    $alennettu=$loppusumma-$alennus;
echo "$loppusumma <br>";
echo "$alennus <br>";
echo $alennettu;
}
?>

<?php require "footer.php"; ?>
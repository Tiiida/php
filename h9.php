<?php require "header.php"; ?>

<p>
<form action="h9.php" method="post">
        Anna luku 1: <input type="number" name="luku1" maxlength=10><br>
        Anna luku 2: <input type="number" name="luku2" maxlenght=10><br>
        Tulosta suurempi: <input type="radio" name="valinta" value="suurempi">
        Tulosta pienempi: <input type="radio" name="valinta" value="pienempi">
        <input type="submit" value="Lähetä">
    </form>
</p>
<?php
if(isset($_POST["luku1"], $_POST["luku2"])) {
    $luku1 = $_POST["luku1"];
    $luku2 = $_POST["luku2"];
if ($luku1>$luku2) {
    $pienempi=$luku2;
    $suurempi=$luku1;
} else {
    $pienempi=$luku1;
    $suurempi=$luku2;
}
if($_POST["valinta"]=="pienempi") {
    echo $pienempi;
} else {
    echo $suurempi;
}
}
?>

<?php require "footer.php"; ?>
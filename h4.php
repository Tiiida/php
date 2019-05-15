<?php require "header.php"; ?>
<p>
<form action="h4.php" method="post">
        Anna hinta: <input type="number" name="hinta" maxlength=30><br>
        Anna alv%: <input type="number" name="alv" maxlength=30><br>
        <input type="submit" value="Lähetä">
        <input type="hidden" name="form_submitted" value="1"/>
    </form>
</p>
<?php
if (isset($_POST['alv'], $_POST['hinta'])) {
$alv = round($_POST['alv']/100*$_POST['hinta'],2);
$hinta = round($_POST['hinta']+$alv);

echo "Alvin määrä on $alv", "<br>";
echo "Hinta alvin kanssa on $hinta euroa";
}
?>
<?php require "footer.php"; ?>
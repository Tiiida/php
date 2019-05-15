<?php require "header.php"; ?>

<p>
<form action="h6.php" method="post">
        Anna numero: <input type="number" name="arvosana" maxlength=2><br>
        <input type="submit" value="Lähetä">
        <input type="hidden" name="form_submitted" value="1"/>
    </form>
</p>
<?php
if (isset($_POST["arvosana"])) {
    $arvosana = $_POST["arvosana"];

    if ($arvosana == 1) {
        echo "Petraa laiskamato";
    } elseif ($arvosana == 2) {
        echo "Ihan jees";
    } elseif ($arvosana == 3) {
        echo "COOL!";
    } else {
        echo "Anna luku 1-3 välillä";
    }
}
?>
<?php require "footer.php"; ?>
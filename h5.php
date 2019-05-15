<?php require "header.php"; ?>

<p>
<form action="h5.php" method="post">
        Anna numero: <input type="number" name="arpa" maxlength=2><br>
        <input type="submit" value="Lähetä">
        <input type="hidden" name="form_submitted" value="1"/>
    </form>
</p>
<?php
if (isset($_POST["arpa"])) {
  $luku = rand (1, 10);
  $arpa = $_POST["arpa"];
  if ($luku == $arpa) {
      echo "ONNEEEEEEE";
  } else {
      echo "Bad for you friend";
  }
}
?>


<?php require "footer.php"; ?>
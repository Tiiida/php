<?php require "header.php"; ?>
<?php if (isset($_GET['form_submitted'])): ?>
    <?php
        if(isset($_GET['name'], $_GET['lastname'], $_GET['age'])){
            $name = $_GET['name'];
            $lastname = $_GET['lastname'];
            $age = $_GET['age'];
            echo "Mitä kuuluu  $name $lastname? ", "Olet $age vuotta vanha";
        } else {
            echo "Et voi jätttää kenttiä tyhjäksi";
        }
    ?>
<?php else: ?>
    <h3>Anna tietosi</h3>
    <form action="h1.php" method="get">
        Etunimi: <input type="text" name="name" maxlength=30><br>
        Sukunimi: <input type="text"name="lastname" maxlength=39><br>
        Ikä:     <input type="number" name="age"><br>
        <input type="submit" value="Lähetä">
        <input type="hidden" name="form_submitted" value="1" />
    </form>
<?php endif; ?>


<?php require "footer.php"; ?>
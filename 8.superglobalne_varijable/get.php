<?php

var_dump($_REQUEST);
var_dump($_POST);
var_dump($_GET);

?>
<!DOCTYPE html>
<html>

<body>

    <h2>HTML Forms</h2>

    <form method="POST">
        <label for="first_name">Ime:</label><br>
        <input type="text" id="first_name" name="first_name" value="John"><br>
        <label for="last_name">Prezime:</label><br>
        <input type="text" id="last_name" name="last_name" value="Doe"><br><br>
        <input type="submit" value="Pošalji">
    </form>



</body>

</html>
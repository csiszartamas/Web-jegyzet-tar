<h2>Keresés</h2>
<form method="post">
    <label>Keresendő téma, vagy szövegrészlet:</label>
    <input type="text" name="keresendo">
    <input type="submit" value="&#128269;"> 
</form>

<?php

if (isset($_POST["keresendo"])) {
    $keresendo = $_POST["keresendo"];
    $jegyzetek = Kereses($keresendo);
    if ($jegyzetek != null) {
        echo count($jegyzetek)." találat \"".$keresendo."\" kifejezésre";
        for ($i=0; $i < count($jegyzetek); $i++) { 
            echo "<hr>
            <p>Dátum: ".$jegyzetek[$i]["datum"]."</p>
            <p>Téma: ".$jegyzetek[$i]["tema"]."</p>
            <p>felvette: ".$jegyzetek[$i]["nev"]."</p>
            <p>Jegyzet:</p>
            <p>".$jegyzetek[$i]["tartalom"]."</p>";
        }
    }
    else {
        echo "nincs találat \"".$keresendo."\" kifejezésre";
    }
}

?>
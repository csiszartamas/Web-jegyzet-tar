<?php
if (isset($_GET["id"])) {
    $detail = Detail($_GET["id"]);
    if ($detail != null) {
        echo "<h2>".$detail["nev"]." jegyzete</h2>
        <p>Dátum: ".$detail["datum"]."</p>
        <p>Téma: ".$detail["tema"]."</p>
        <p>Jegyzet:</p>
        <p>".$detail["tartalom"]."</p>";
    }
    else {
        echo "<p>Nem létezik, ilyen jegyzet</p>";
    }
}
?>
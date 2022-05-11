<?php
if (isset($_GET["id"])) {
    echo "<h2>".Nev($_GET["id"])." Jegyzetei</h2>";
    $jegyzet = Jegyzet($_GET["id"]);
    if ($jegyzet != null) {
        echo "<p>Öszesen ".count($jegyzet)." db</p>";
        for ($i=0; $i < count($jegyzet); $i++) { 
            echo "<hr>
            <p>Dátum: ".$jegyzet[$i]["datum"]."</p>
            <p>Téma: ".$jegyzet[$i]["tema"]."</p>
            <p>Jegyzet:</p>
            <p>".$jegyzet[$i]["tartalom"]."</p>";
        }
    }
    else {
        echo "<p>Nincs megjeleníthető jegyzet</p>";
    }
}
?>
<?php
include("./BackEnd/DBConnection.php");
include("./BackEnd/DBFunctions.php");
include("./FrontEnd/menu.php"); // menükezelés
include("./FrontEnd/header.php"); // fejrész
include($content); // tartalmi rész
include("./FrontEnd/footer.php");// lábrész
?>
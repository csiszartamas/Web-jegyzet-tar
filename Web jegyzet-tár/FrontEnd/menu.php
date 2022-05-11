<?php

$content="./FrontEnd/pages/jegyzetek.php";
if (isset($_GET['p']))
{	
	switch ($_GET['p'])
	{
		case "felhasznalok": 
			$content="./FrontEnd/pages/felhasznalok.php";
			break;
		case "detail": 
			$content="./FrontEnd/pages/detail.php";
			break;
		case "jegyzet": 
			$content="./FrontEnd/pages/jegyzet.php";
			break;
		case "kereses": 
			$content="./FrontEnd/pages/kereses.php";
			break;
		default: 
			$content="./FrontEnd/pages/jegyzetek.php";
			break;
	}
}
?>
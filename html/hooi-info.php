<?php
// hooi-info.php
include("global.php");

class ActueelPage extends Page {
	
	function printPageContent() {
		echo file_get_contents("html/afstandsbalk80.html");
		echo file_get_contents("html/hooiInfoBalk.html");
		echo file_get_contents("html/afstandsbalk40.html");
		echo file_get_contents("html/meerWetenBalk.html");
		echo file_get_contents("html/onderTekstBalk.html");

	}
}

$page = new ActueelPage();
$page->render();
?>
<?php
// hooiInWikkelbalen.php
include("global.php");

class ActueelPage extends Page {
	
	function printPageContent() {
		echo file_get_contents("html/afstandsbalk80.html");
		echo file_get_contents("html/hooiInWikkelbalen.html");
		echo file_get_contents("html/afstandsbalk20.html");
		echo file_get_contents("html/wikkelbalenVideoBalk.html");
		echo file_get_contents("html/voordroogHooiBalk.html");
		echo file_get_contents("html/meerWetenBalk.html");
		echo file_get_contents("html/onderTekstBalk.html");

	}
}

$page = new ActueelPage();
$page->render();
?>
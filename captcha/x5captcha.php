<?php
include("../res/x5engine.php");
$nameList = array("767","3p6","ctp","487","cdn","8lz","7zh","lma","zvp","ddm");
$charList = array("C","J","G","E","U","8","Z","P","K","P");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php

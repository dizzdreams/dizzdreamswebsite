<?php
include("../res/x5engine.php");
$nameList = array("xhf","ad4","czy","s5l","pww","cv6","lrt","ez3","y2r","w5u");
$charList = array("6","E","E","J","A","A","X","E","L","E");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php

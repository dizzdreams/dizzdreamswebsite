<?php
include("../res/x5engine.php");
$nameList = array("ece","jez","cl3","rlh","2sj","v3t","gkd","rpk","xky","zca");
$charList = array("2","T","8","E","A","P","D","3","A","2");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php

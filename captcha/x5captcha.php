<?php
include("../res/x5engine.php");
$nameList = array("rcl","wm2","jc8","26x","vkz","lat","2f5","h6v","jxp","k2l");
$charList = array("D","Y","A","H","R","S","T","N","P","P");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php

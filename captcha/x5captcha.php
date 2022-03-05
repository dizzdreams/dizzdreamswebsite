<?php
include("../res/x5engine.php");
$nameList = array("ep2","yt2","8m7","ylz","x3s","53p","h5l","vg5","fuk","axt");
$charList = array("H","E","4","D","4","5","P","P","W","H");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php

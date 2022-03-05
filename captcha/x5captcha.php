<?php
include("../res/x5engine.php");
$nameList = array("frz","8k6","ysm","aes","fag","ha4","u3c","nhr","fvy","v2n");
$charList = array("J","K","5","H","E","Y","5","3","D","A");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php

<?php
include("../res/x5engine.php");
$nameList = array("sl4","ze6","jn7","xjp","466","md4","x86","y6c","na6","az2");
$charList = array("N","T","2","D","Z","T","8","E","Z","U");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php

<?php require_once("res/x5engine.php"); ?>
<!DOCTYPE html><!-- HTML5 -->
<html prefix="og: http://ogp.me/ns#" lang="en-GB" dir="ltr">
	<head>
		<title>Search - dizzdreams on da web - WEBSITE X5 DEMO VERSION </title>
		<meta charset="utf-8" />
		<!--[if IE]><meta http-equiv="ImageToolbar" content="False" /><![endif]-->
		<meta name="author" content="EMS" />
		<meta name="generator" content="Incomedia WebSite X5 Professional 16.2.1 - UNREGISTERED VERSION - www.websitex5.com" />
		<meta property="og:locale" content="en" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="http://dizzdreams.tk/imsearch.php" />
		<meta property="og:title" content="Search" />
		<meta property="og:site_name" content="dizzdreams on da web" />
		<meta property="og:image" content="http://dizzdreams.tk/favImage.png" />
		<meta property="og:image:type" content="image/png">
		<meta property="og:image:width" content="828">
		<meta property="og:image:height" content="810">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		
		<link rel="stylesheet" href="style/reset.css?16-2-1-0" media="screen,print" />
		<link rel="stylesheet" href="style/print.css?16-2-1-0" media="print" />
		<link rel="stylesheet" href="style/style.css?16-2-1-0" media="screen,print" />
		<link rel="stylesheet" href="style/template.css?16-2-1-0" media="screen" />
		<link rel="stylesheet" href="pcss/imsearch.css?16-2-1-0-637822011190085347" media="screen,print" />
		<script src="res/jquery.js?16-2-1-0"></script>
		<script src="res/x5engine.js?16-2-1-0" data-files-version="16-2-1-0"></script>
		<script>
			window.onload = function(){ checkBrowserCompatibility('Your browser does not support the features necessary to display this website.','Your browser may not support the features necessary to display this website.','[1]Update your browser[/1] or [2]continue without updating[/2].','http://outdatedbrowser.com/'); };
			x5engine.utils.currentPagePath = 'imsearch.php';
			x5engine.boot.push(function () { x5engine.imPageToTop.initializeButton({}); });
		</script>
		<link rel="icon" href="favicon.png?16-2-1-0-637822011190075342" type="image/png" />
	</head>
	<body>
		<div id="imPageExtContainer">
			<div id="imPageIntContainer">
				<div id="imHeaderBg"></div>
				<div id="imFooterBg"></div>
				<div id="imPage">
					<header id="imHeader">
						<h1 class="imHidden">Search - dizzdreams on da web - WEBSITE X5 DEMO VERSION </h1>
						<div id="imHeaderObjects"><div id="imHeader_imObjectTitle_01_wrapper" class="template-object-wrapper"><div id="imHeader_imCell_1" class="" > <div id="imHeader_imCellStyleGraphics_1"></div><div id="imHeader_imCellStyle_1" ><div id="imHeader_imObjectTitle_01"><span id ="imHeader_imObjectTitle_01_text" >welcome!</span > </div></div></div></div><div id="imHeader_imObjectTitle_02_wrapper" class="template-object-wrapper"><div id="imHeader_imCell_2" class="" > <div id="imHeader_imCellStyleGraphics_2"></div><div id="imHeader_imCellStyle_2" ><div id="imHeader_imObjectTitle_02"><span id ="imHeader_imObjectTitle_02_text" >v1.0.2</span > </div></div></div></div></div>
					</header>
					<div id="imStickyBarContainer">
						<div id="imStickyBarGraphics"></div>
						<div id="imStickyBar">
							<div id="imStickyBarObjects"></div>
						</div>
					</div>
					<a class="imHidden" href="#imGoToCont" title="Skip the main menu">Go to content</a>
					<div id="imSideBarContainer">
						<div id="imSideBarGraphics"></div>
						<div id="imSideBar">
							<div id="imSideBarObjects"><div id="imSideBar_imObjectImage_01_wrapper" class="template-object-wrapper"><div id="imSideBar_imCell_1" class="" > <div id="imSideBar_imCellStyleGraphics_1"></div><div id="imSideBar_imCellStyle_1" ><img id="imSideBar_imObjectImage_01" src="images/empty-GT_imagea-1-.png" title="" alt="" /></div></div></div></div>
						</div>
					</div>
					<div id="imContentContainer">
						<div id="imContentGraphics"></div>
						<main id="imContent">
							<a id="imGoToCont"></a>
				<div id="imSearchPage">
				<h2 id="imPgTitle">Search results</h2>
				<?php
				$search = new imSearch();
				$keys = isset($_GET['search']) ? @htmlspecialchars($_GET['search']) : "";
				$page = isset($_GET['page']) ? @htmlspecialchars($_GET['page']) : 0;
				$type = isset($_GET['type']) ? @htmlspecialchars($_GET['type']) : "pages"; ?>
				<div class="searchPageContainer">
				<?php echo $search->search($keys, $page, $type); ?>
				</div>
				</div>
				
							<div class="imClear"></div>
						</main>
					</div>
					<footer id="imFooter">
						<div id="imFooterObjects"></div>
					</footer>
				</div>
				<span class="imHidden"><a href="#imGoToCont" title="Read this page again">Back to content</a></span>
			</div>
		</div>
		
		<noscript class="imNoScript"><div class="alert alert-red">To use this website you must enable JavaScript.</div></noscript>
	</body>
</html>

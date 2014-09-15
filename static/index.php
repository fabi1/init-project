<?php
    include 'inc/conf/config.inc.php';
    $rub = "home";
    $page = "home";
    $title = "Project homepage";
    $scriptsHeader = array("js/vendor/modernizr-2.8.1.min.js");
    $scriptsFooter = array(
        "//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js",
        "js/vendor/jquery.plugin.js",
        "js/app.js"
    );
?>
	<?php
		//if( $detect->isMobile() && !$detect->isTablet() ){}
	?>
	<?php include("inc/head.php"); ?>
	<?php include("inc/utils/browseroutdate.php"); ?>
    <?php include("inc/components/header.php"); ?>
    <div id="contents">
        Page contents
    </div>
    <?php include("inc/components/footer.php"); ?>
    <?php include("inc/tracking.php"); ?>
    <?php include("inc/scripts.php"); ?>
</body>
</html>
        
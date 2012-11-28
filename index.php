<?php
	error_reporting(0);
	include_once("include/sys_inc/session.inc.php");
	include("include/header.inc.php");
	
	$_SESSION['location'] = $_GET['location'];
	if (!$_SESSION['location']){
		$_SESSION['location'] = "home";
	}
	
	if ((include("content/".$_SESSION['location'].".inc.php")) == 1){
		include_once("content/".$_SESSION['location'].".inc.php");
	}else{
		$_SESSION['location'] = "home";
		?>
        <script type="text/javascript">;
			location.href='index.php'
		</script>
        <?php
	}
	include("include/footer.inc.php");
?>

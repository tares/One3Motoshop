<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Home | ONE THREE Motoshop</title>
        <link rel="stylesheet" type="text/css" href="source/style/css/style.css" media="screen" title="style (screen)" />
        <link rel="stylesheet" type="text/css" href="source/style/css/menu.css" media="screen" title="style (screen)" />
        <link rel="stylesheet" type="text/css" href="source/style/css/product.css" media="screen" title="style (screen)" />
        
        <?php include("include/loader/jquery.inc.php"); ?>
        
		<script type="text/javascript">
			$(document).ready(function(){
				$(".slidingDiv").hide();
				$(".show_hide").show();
				
				$('.show_hide').click(function(){
					$(".slidingDiv").slideToggle("slow");
					initialize();
				});
			});
		</script>
        
        <!--Map-->
		<script type="text/javascript">
			function initialize() {
				var myLatlng = new google.maps.LatLng(-6.23256, 106.63090);
				var mapOptions = {
					zoom: 14,
					mapDiv:Node,
					center: myLatlng,
					mapTypeId: google.maps.MapTypeId.ROADMAP
				}
			
				var map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
				
				var marker = new google.maps.Marker({
					position: myLatlng,
					map: map,
					title:"Our One3MotoShop"
				});
			}
			
			function loadScript() {
				var script = document.createElement("script");
				script.type = "text/javascript";
				script.src = "http://maps.googleapis.com/maps/api/js?key=AIzaSyDxxfJSHJq9C3Uuu7u0XjoxsudcJNTmQj0&sensor=false&callback=initialize";
				document.body.appendChild(script);
			}
			
			window.onload = loadScript;
        </script>
        <!--End Map-->
        
        <?php include("include/loader/aviaslider.inc.php"); ?>
        
        <!-- FONTS -->
        <link href='http://fonts.googleapis.com/css?family=Petit+Formal+Script|Patua+One' rel='stylesheet' type='text/css'>
	</head>
    
    <body>
        <?php include("include/widget/nav.inc.php"); ?>
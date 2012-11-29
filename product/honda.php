<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Home | ONE THREE Motoshop</title>
        <link rel="stylesheet" type="text/css" href="../source/style/css/style.css" media="screen" title="style (screen)" />
        <link rel="stylesheet" type="text/css" href="../source/style/css/menu.css" media="screen" title="style (screen)" />
        <link rel="stylesheet" type="text/css" href="../source/style/css/product.css" media="screen" title="style (screen)" />
        
        
		<link type="text/css" href="../source/script/jquery/css/ui-lightness/jquery-ui-1.8.24.custom.css" rel="stylesheet" />
		<script type="text/javascript" src="../source/script/jquery/js/jquery-1.8.2.min.js"></script>
		<script type="text/javascript" src="../source/script/jquery/js/jquery-ui-1.8.24.custom.min.js"></script>
        <script type="text/javascript" src="../source/script/jquery/js/jquery-ui-1.8.24.custom.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$(".slidingDiv").hide();
				$(".show_hide").show();
				
				$('.show_hide').click(function(){
					$(".slidingDiv").slideToggle("slow");
				});
                                
                                $("#showcase").awShowcase(
                                {
                                        content_width:			470,
                                        content_height:			330,
                                        fit_to_parent:			false,
                                        auto:					false,
                                        interval:				3000,
                                        continuous:				false,
                                        loading:				true,
                                        tooltip_width:			200,
                                        tooltip_icon_width:		32,
                                        tooltip_icon_height:	32,
                                        tooltip_offsetx:		18,
                                        tooltip_offsety:		0,
                                        arrows:					false,
                                        buttons:				false,
                                        btn_numbers:			true,
                                        keybord_keys:			true,
                                        mousetrace:				false, /* Trace x and y coordinates for the mouse */
                                        pauseonover:			true,
                                        stoponclick:			true,
                                        transition:				'fade', /* hslide/vslide/fade */
                                        transition_delay:		300,
                                        transition_speed:		500,
                                        show_caption:			'onhover', /* onload/onhover/show */
                                        thumbnails:				true,
                                        thumbnails_position:	'outside-last', /* outside-last/outside-first/inside-last/inside-first */
                                        thumbnails_direction:	'vertical', /* vertical/horizontal */
                                        thumbnails_slidex:		0, /* 0 = auto / 1 = slide one thumbnail / 2 = slide two thumbnails / etc. */
                                        dynamic_height:			false, /* For dynamic height to work in webkit you need to set the width and height of images in the source. Usually works to only set the dimension of the first slide in the showcase. */
                                        speed_change:			true, /* Set to true to prevent users from swithing more then one slide at once. */
                                        viewline:				false /* If set to true content_width, thumbnails, transition and dynamic_height will be disabled. As for dynamic height you need to set the width and height of images in the source. */
                                });
                                
			});
		</script>
        
        <script type="text/javascript" src="../source/script/jquery/js/jquery.min.js"></script>
        <script type="text/javascript" src="../source/script/jquery/js/jquery.aw-showcase.min.js"></script>
        
        <!-- FONTS -->
        <link href='http://fonts.googleapis.com/css?family=Petit+Formal+Script|Patua+One' rel='stylesheet' type='text/css'>
	</head>
    
    <body>
        <div id="toolbar" class="dropShadow">
            <div id="toolbar-header">
                ONE THREE Motoshop
            </div>
            <ul id="toolbar-menu">
                <li><a href="../">Home</a></li>
                <li><a href="../product/">Product</a></li>
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="#news">News</a></li>
                <li><a href="javascript:void(0)" class="show_hide">About Us</a></li>
                <li>|</li>
                <li style="margin-right:10px;">Stay Connected</li>
                <li class="icon-facebook"><a href=""></a></li>
                <li class="icon-twitter"><a href=""></a></li>
            </ul>
        </div>
        <div id="listProduct" class="dropShadow_lighter">
            <div id="listText" class="txtBold"> <a>Find By : </a></div>
            <div id="listText" class="sub1">
                <a>Brand  </a>
                <select class ="brand" name="brand">
                     <option value="honda">Honda</option>
                </select>
            </div>
             <div id="listText" class="sub2">
                <a>Motor  </a>
                <select class ="brand" name="brand">
                     <option value="honda">CBR 150</option>
                </select>
            </div>
              <div id="listText" class="sub3">
                <a>Product </a>
                <select class ="brand" name="brand">
                     <option value="honda">CBR 150</option>
                </select>
            </div>
        </div>
        <div id="productSection">
        	<div id="productHeader" class="dropShadow">
                    <div id="leftSub">
                        <div id="topleftSub" class="three-edge-shadow">
                            <div id="headerSub" class="dropShadow_lighter">
                                <div id="font-headserSub">
                                    <a>Category</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="rightSub" class="one-edge-shadow">
                        <div id="headerSub" class="dropShadow_lighter">
                            <div id="font-headserSub">
                                Brand > Honda > FIREBLADE(CBR 1000RR) 
                            </div>
                            <!--------SEARCH-------->
                            <div id="tools-search">
                                <form action="#" method="post" class="form-wrapper cf">
                                    <div>
                                          <input name="search" type="text"/>
                                          <button type="submit">Search</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!----------------SLIDE------------------>
                        <div id="showcase" class="showcase">
                            <div class="showcase-slide">
                                <div class="showcase-content">
                                    <img src="../source/images/product/motor/hnd002.jpg" width="470px" height="330px"/>
                                </div>
                                <div class="showcase-thumbnail">
				<img src="../source/images/product/motor/hnd002.jpg" width="110px" />
                                <div class="showcase-thumbnail-cover"></div>
                                </div>
                            </div>
                             <div class="showcase-slide">
                                <div class="showcase-content">
                                    <img src="../source/images/product/motor/hnd001.jpg" width="470px" height="330px" />
                                </div>
                                <div class="showcase-thumbnail">
				<img src="../source/images/product/motor/hnd001.jpg" width="110px" />
                                <div class="showcase-thumbnail-cover"></div>
                                </div>
                            </div>
                            <div class="showcase-slide">
                                <div class="showcase-content">
                                    <img src="../source/images/product/motor/hnd003.jpg" width="470px" height="330px" />
                                </div>
                                <div class="showcase-thumbnail">
				<img src="../source/images/product/motor/hnd003.jpg" width="110px" />
                                <div class="showcase-thumbnail-cover"></div>
                                </div>
                            </div>
                            <div class="showcase-slide">
                                <div class="showcase-content">
                                    <img src="../source/images/product/motor/hnd003.jpg" width="470px" height="330px" />
                                </div>
                                <div class="showcase-thumbnail">
				<img src="../source/images/product/motor/hnd003.jpg" width="110px" />
                                <div class="showcase-thumbnail-cover"></div>
                                </div>
                            </div>
                        </div>
                        <!----------END SLIDE------------->
                        <div id="productInfo">
                            <div id="productPrice">
                                <a>Rp 50.000.000,00</a>
                            </div>
                            <hr class='dotted' />
                            <div id="productDesc">
                                <a> <b>Mesin : </b>
                                    Tipe mesin 	4 Langkah SOHC
                                    Sistem pendinginan 	Pendingin udara
                                    Diameter x langkah 	63.5 x 62.2 mm
                                    Volume langkah 	196.9 cc
                                    Perbandingan kompresi 	9,0 : 1
                                    Daya maksimum 	16.7 PS / 8.500 rpm
                                    Torsi maksimum 	1.60 kgf.m / 7.000 rpm
                                    Kopling 	Manual, multi plate wet clutch
                                    Starter 	Elektrik & kick starter
                                    Busi 	ND X 24 EP – U9/NGK DP8 EA-9
                                </a>
                            </div>
                        </div>
                    </div>
                        
            </div>
        </div>
        
        <div class="slidingDiv">
        	<div id="slidingHeader" class="dropShadow_lighter"></div>
            <div id="slidingContent">
            	<div id="contactUS_mainFrame">
                	<div id="contactUS_mainFrame_left">
                	  <form name="frm_sendEmail" action="sendEmail.php" method="post">
               	  		<table width="100%">
                        	<tr>
                                <td>
                                	Name <span class="required">(required*)</span><br />
                                    <input type="text" name="tb_name" id="tb_name" class="inputTextStyle" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Email Address <span class="required">(required*)</span><br />
                                    <input type="text" name="tb_email" id="tb_email" class="inputTextStyle" />
                                </td>
                            </tr>
                            <tr>
                            	<td>
                                	Your Message <span class="required">(required*)</span><br />
                                    <textarea name="tb_email" id="tb_email" class="inputTextAreaStyle" ></textarea>
                                </td>
                            </tr>
                            <tr>
                            	<td>
                                	<input type="submit" value="Send Message" class="fsSubmitButton" />
                                </td>
                            </tr>
                        </table>
                        </form>
                    </div>
            	</div>
            </div>
        </div>
		<div align="center">
			<span class="credit">
            	<p>Terms of Use | Privacy Policy</p>
                <p>Copyright &copy; 2012 Flapjaxx Inc. All rights reserved</p>
			</span>
		</div>
        <script type="text/javascript">
            $(function() {
                $('#toolbar-menu li a').bind('click', function(event){
                    var $anchor = $(this);
                    
                    $('html, body').stop().animate({
                        scrollTop: $($anchor.attr('href')).offset().top
                    }, 1500,'easeInOutExpo');

                    event.preventDefault();
                });
            });
        </script>
    </body>
</html>
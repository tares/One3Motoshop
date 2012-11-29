<?php
include('config.php');
$per_page = 4; 
$sql = "select * from data_product_info";
$result = mysql_query($sql);
$count = mysql_num_rows($result);
$pages = ceil($count/$per_page)
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Home | ONE THREE Motoshop</title>
        <link rel="stylesheet" type="text/css" href="../source/style/css/style.css" media="screen" title="style (screen)" />
        <link rel="stylesheet" type="text/css" href="../source/style/css/menu.css" media="screen" title="style (screen)" />
        <link rel="stylesheet" type="text/css" href="../source/style/css/product.css" media="screen" title="style (screen)" />
        
        
		<link type="text/css" href="../source/script/jquery/css/ui-lightness/jquery-ui-1.8.24.custom.css" rel="stylesheet" />
		<script type="text/javascript" src="../source/script/jquery/js/jquery.min.item.js"></script>
		<script type="text/javascript" src="../source/script/jquery/js/jquery-ui-1.8.24.custom.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$(".slidingDiv").hide();
				$(".show_hide").show();
				
				$('.show_hide').click(function(){
					$(".slidingDiv").slideToggle("slow");
				});
                                function Display_Load(){
                                $("#loading").fadeIn(900,0);
                                $("#loading").html("<img src='../source/images/product/tools/loader.gif'/>");
                                }
                                function Hide_Load(){
                                $("#loading").fadeOut('slow');
                                };
                                $("#content").load("page.php?page=1", Hide_Load());
                                $("#pageSub li").click(function(){
                                        Display_Load();
                                        var pageNum = this.id;
                                        $("#content").load("page.php?page=" + pageNum, Hide_Load());
                                        $("#content").lo
                                        $('html, body').animate({ scrollTop: 0 }, 'slow');
                                });
                                
			});
		</script>
        
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
        	<div id="listHeader" class="dropShadow">
                    <div id="leftSub">
                        <div id="topleftSub" class="three-edge-shadow">
                            <div id="headerSub" class="dropShadow_lighter">
                                <div id="font-headserSub">
                                    <a>Category</a>
                                </div>
                            </div>
                        </div>
                        <div id="btmleftSub" >
                             <div id="brandPict">
                            </div>
                        </div>
                    </div>
                    <div id="rightSubList" class="one-edge-shadow">
                        <div id="headerSub" class="dropShadow">
                            <div id="font-headserSub">
                                Brand > Suzuki
                            </div>
                            <!--------SEARCH------>
                            <div id="tools-search">
                                <form action="#" method="post" class="form-wrapper cf">
                                    <div>
                                          <input name="search" type="text"/>
                                          <button type="submit">Search</button>
                                    </div>
                                </form>
                            </div>
                             <!-------------------->
                        </div>
                        <div id="loading"></div>
                        <div id="itemSub">
                            <hr class='line' />
                            <!---- SHOW ITEM  -->
                            <div id="content" ></div>
                            <!------------------> 	
                        </div>
                        <div id="pageSub">
                            <ul>
				<?php
				for($i=1; $i<=$pages; $i++)
				{
					echo '<li id="'.$i.'">'.$i.'</li>';
				}
				?>
                            </ul>
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
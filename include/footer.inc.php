       <div class="slidingDiv">
        	<div id="slidingHeader" class="dropShadow_lighter"></div>
            <div id="slidingContent">
            	<div id="contactUS_mainFrame">
                	<div id="contactUS_mainFrame_left">
                    	<div id="contactUS_box" class="contactUS_box1">
                        	<div id="contactUS_header" style="background-image:url(source/style/image/location.png)"></div>
                            <div id="contactUS_contentWrapper">
                            	<table>
                                	<tr>
                                    	<td><span style="font-size:20px; font-weight:bold; color:#FF3;">One3Motoshop</span></td>
                                    </tr>
                                    <tr>
                                    	<td>Jalan Raya Kelapa Puan AF 1 No. 24</td>
                                    </tr>
                                    <tr>
                                    	<td>Gading Serpong. Tangerang</td>
                                    </tr>
                                    <tr>
                                    	<td>Banten. Indonesia. 15310</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div id="contactUS_box" class="contactUS_box2">
                        	<div id="contactUS_header" style="background-image:url(source/style/image/phone.png)"></div>
                            <div id="contactUS_contentWrapper">
                            	<table>
                                	<tr>
                                    	<td width="50px">Phone </td>
                                        <td width="10px">:</td>
                                    	<td>+62-21 546 8388</td>
                                    </tr>
                                    <tr>
                                    	<td>Mobile </td>
                                        <td width="10px">:</td>
                                    	<td>+62-813 171 633 12</td>
                                    </tr>
                                    <tr>
                                    	<td>BB. Pin </td>
                                        <td width="10px">:</td>
                                    	<td>29DDE2CD</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div id="contactUS_box" class="contactUS_box3">
                        	<div id="contactUS_header" style="background-image:url(source/style/image/socialMedia.png)"></div>
                            <div id="contactUS_contentWrapper">
                            </div>
                        </div>
                    </div>
            	</div>
            </div>
        </div>
		<div id="footer" align="center">
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
		<div id="footer" align="center" class="dropShadow">
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

<div class="f-widget"><!--footer Widget-->
		<div class="container">
			<div class="row">
				<div class="col-md-4"><!--footer contact widget-->
					<div class="title-widget-bg">
						<div class="title-widget-cursive">İletişim</div>
					</div>
					<ul class="contact-widget">
						<li class="fphone"><?php echo $ayarcek['ayar_tel']; ?> <br> <?php echo $ayarcek['ayar_faks']; ?></li>
						<li class="fmobile"><?php echo $ayarcek['ayar_gsm']; ?><br><?php echo $ayarcek['ayar_gsm']; ?></li>
						<li class="fmail lastone"><?php echo $ayarcek['ayar_mail']; ?></li>
					</ul>
				</div><!--footer contact widget-->
			</div>
			<div class="spacer"></div>
		</div>
	</div><!--footer Widget-->
	<div class="footer"><!--footer-->
		<div class="container">
			<div class="row">
				<div class="col-md-9">

					<div class="f-credit">&copy;<?php echo $ayarcek['ayar_author'] ?> <a href="http://222.joyakademi.com">www.busranurhalici.com</a></div>
				</div>
				<div class="col-md-3"><!--footer Share-->

					<div class="fsoc">
						
						<a href="http://<?php echo $ayarcek['ayar_twitter']; ?>" class="ftwitter">twitter</a>
						
						<a href="http://<?php echo $ayarcek['ayar_facebook']; ?>" class="ffacebook">facebook</a>
						
						<a href="http://<?php echo $ayarcek['ayar_youtube']; ?>" class="fflickr">Youtube</a>
						
						<a href="http://<?php echo $ayarcek['ayar_google']; ?>" class="ffeed">Google</a>
					</div>
					
				</div><!--footer Share-->
			</div>
		</div>
	</div><!--footer-->
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap\js\bootstrap.min.js"></script>
	
	<!-- map -->
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script> 
	<script type="text/javascript" src="js\jquery.ui.map.js"></script>
	<script type="text/javascript" src="js\demo.js"></script>
	
	<!-- owl carousel -->
    <script src="js\owl.carousel.min.js"></script>
	
	<!-- rating -->
	<script src="js\rate\jquery.raty.js"></script>
	<script src="js\labs.js" type="text/javascript"></script>
	
	<!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="js\product\lib\jquery.mousewheel-3.0.6.pack.js"></script>
	
	<!-- fancybox -->
    <script type="text/javascript" src="js\product\jquery.fancybox.js?v=2.1.5"></script>
	
	<!-- custom js -->
    <script src="js\shop.js"></script>
	</div>
  </body>
</html>

<div class="main-slide" >
	<div id="sync1" class="owl-carousel"  >


		<?php 

		$slidersor=$db->prepare("SELECT * FROM slider");
		$slidersor->execute();

		while($slidercek=$slidersor->fetch(PDO::FETCH_ASSOC)) {

		 ?>


		<div class="item">
			<div class="slide-desc">
				<div class="inner"  >
					<br></br>
					<h1 style="font-size:200%"   ><?php echo $slidercek['slider_ad'] ?></h1>
				</div>
				<div class="inner">

				</div>
			</div>
			<div class="slide-type-1" align="center"  >
				<a href="<?php echo $slidercek['slider_link'] ?>"><img src="<?php echo $slidercek['slider_resimyol'] ?>" height=40%   width=40% alt="" class="img-responsive"></a>
			</div>
		</div>

		<?php } ?>




	</div>
</div>

		<!-- Alt Bar 


		<div class="bar"></div>
		<div id="sync2" class="owl-carousel">
			<div class="item">
				<div class="slide-type-1-sync">
					<h3>Stylish Jacket</h3>
					<p>Description here here here</p>
				</div>
			</div>
			<div class="item">
				<div class="slide-type-1-sync">
					<h3>Stylish Jacket</h3>
					<p>Description here here here</p>
				</div>
			</div>
			<div class="item">
				<div class="slide-type-1-sync">
					<h3>Nike Airmax</h3>
					<p>Description here here here</p>
				</div>
			</div>
			<div class="item">
				<div class="slide-type-1-sync">
					<h3>Unique smaragd ring</h3>
					<p>Description here here here</p>
				</div>
			</div>
			<div class="item">
				<div class="slide-type-1-sync">
					<h3>Stylish Jacket</h3>
					<p>Description here here here</p>
				</div>
			</div>
			<div class="item">
				<div class="slide-type-1-sync">
					<h3>Nike Airmax</h3>
					<p>Description here here here</p>
				</div>
			</div>
		</div>

		-->
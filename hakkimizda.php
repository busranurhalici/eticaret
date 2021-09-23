<?php 

include 'header.php';

//Belirli veriyi seçme işlemi
$hakkimizdasor=$db->prepare("SELECT * FROM hakkimizda where hakkimizda_id=:id");
$hakkimizdasor->execute(array(
	'id' => 0
	));
$hakkimizdacek=$hakkimizdasor->fetch(PDO::FETCH_ASSOC);


?>



<div class="container">
	
	<div class="row">
		<div class="col-md-9"><!--Main content-->
			<div class="title-bg">
			<div class="title"><?php echo $hakkimizdacek['hakkimizda_baslik']; ?></div>
			</div>
			<img width="200" height="200" src="dimg/tanitim.jpg" float=left > Merhaba ben Büşra Nur HALICI. 24 yaşındayım ve 5 yıldır bu sektördeyim.</img>
			<div class="page-content">
				<p>
					<?php echo $hakkimizdacek['hakkimizda_icerik']; ?>
				</p>

			</div>


			<div class="title-bg">
				<div class="title">Misyon</div>
			</div>

			<blockquote><?php echo $hakkimizdacek['hakkimizda_misyon']; ?></blockquote>


			<div class="title-bg">
				<div class="title">Vizyon</div>
			</div>

			<blockquote><?php echo $hakkimizdacek['hakkimizda_vizyon']; ?></blockquote>

			




		</div>




		<!-- Sidebar buraya gelecek -->
		<?php include 'sidebar.php'; ?>


	</div>
	<div class="spacer"></div>
</div>

<?php include 'footer.php'; ?>
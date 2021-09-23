<?php 

include 'header.php'; 

?>

<div class="container">
       <div class="row">
              <div class="col-md-9">
                     <div class="title-bg">
                            <div class="title">Ürünler</div>
                     </div>
                     <div class="row prdct">

                            <?php 
                            $urunsor=$db->prepare("SELECT * FROM urun where urun_durum=:urun_durum and urun_onecikar=:urun_onecikar");
                            $urunsor->execute(array(
                                   'urun_durum' => 1,
                                   'urun_onecikar' => 1
                                    ));

                     
                            while($uruncek=$urunsor->fetch(PDO::FETCH_ASSOC)) {


                                   $urun_id=$uruncek['urun_id'];
                                   $urunfotosor=$db->prepare("SELECT * FROM urunfoto where urun_id=:urun_id order by urunfoto_sira ASC limit 1 ");
                                   $urunfotosor->execute(array(
                                          'urun_id' => $urun_id
                                          ));

                                   $urunfotocek=$urunfotosor->fetch(PDO::FETCH_ASSOC);

                                   
                            ?>



                            <div class="col-md-4">
                                   <div class="productwrap">
                                          <div class="pr-img">
                                                 <a href="urun-<?=seo($uruncek["urun_ad"]).'-'.$uruncek["urun_id"]?>"><img  src="<?php echo $urunfotocek['urunfoto_resimyol'] ?>" alt="" class="img-responsive"></a>
                                                 <div class="pricetag blue"><div class="inner"><span><?php echo $uruncek['urun_fiyat'] ?> TL</span></div></div>
                                          </div>
                                          <span class="smalltitle"><a href="urun-<?=seo($uruncek["urun_ad"]).'-'.$uruncek["urun_id"]?>"><?php echo $uruncek['urun_ad'] ?></a></span>
                                          <span class="smalldesc">Ürün Kodu.: <?php echo $uruncek['urun_id'] ?></span>
                                   </div>
                            </div>

                            <?php } ?>

                     </div>
              </div>
		<div class="spacer"></div>
              <?php include 'sidebar.php'; ?>
	</div>
	<?php include 'footer.php'; ?>
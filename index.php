<?php require_once 'baglan.php'; ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<style>
	.kenarlikRow{border:2px solid red}
	.kenarlikCol{border:2px solid orange;}
	.koyu{font-weight:bold;}
	.fontSize18{font-size:18px;}
	.kenarlik{border:1px solid #e0e0ee;}
	.koseYuvarlat{border-radius: 10px}
	body a{text-decoration:none !important}
</style>
<script src="js/popper.min.js" ></script> 

<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/cozunurlukAyarlari.css" />
<script src="js/jquery-3.3.1.min.js" ></script> 
<script src="js/bootstrap.min.js" ></script>

</head>
<body>


<div class="container">

		<div class="row my-2 align-items-end kenarlik koseYuvarlat">
		<div class="col-2 pt-3 col-lg-2">	
		<a href="../index.php#/"><img src="logo/logoA.SVG" class="img-fluid"></a>
</div>


		<div class="col-12 ">
		<div class="row align-items-end justify-content-lg-end ">
		<div class="col-auto text-white rounded mx-2">
		<a href="#" class="text-white">
		<input type="button" class="col-auto bg-dark text-white rounded mx-2" onClick="location.href='http://localhost/Odev/index.php#'" value="Gelirler" /></a>
</div>
     	<div class="col-auto text-white rounded mx-2">
		<a href="#" class="text-white">
			<input type="button" class="col-auto bg-dark text-white rounded mx-2" onClick="location.href='http://localhost/Odev/index1.php#'" value="Giderler" /></a>
</div>	
</div>
</div>

</div>


	
	<form action="islem.php" method="POST">
		
		<input class="my-2" type="text" required="" name="ogrenci_AdSoyad" placeholder="AdSoyad Giriniz...">
		<input type="text" required="" name="ogrenci_TcNo" placeholder="TcNo Giriniz...">
		<input type="text" required="" name="ogrenci_AdresNo" placeholder="AdresNo Giriniz...">
		<input type="text" required="" name="ogrenci_TelNo" placeholder="TelNo Giriniz...">
		<input type="text" required="" name="ogrenci_VeliTelNo" placeholder="VeliTelNo Giriniz...">
		<input type="text" required="" name="ogrenci_OdemeSekli" placeholder="OdemeSekli Giriniz...">
		<input type="text" required="" name="ogrenci_OdemeTutari" placeholder="OdemeTutari Giriniz...">
		<input type="date" name="ogrenci_Zaman">
        <button type="submit" name="insertislemi">Formu Gönder</button>

	</form>
    <br>
	<h4>Kayıtların Listelenmesi</h4>
	<hr>



	<table  class="table table-dark" style="width: 80%" border="1">
		
		<tr>
			<th>S.NO</th>
			<th>ID</th>
			<th>AdSoyad</th>
			<th>TcNo</th>
			<th>AdresNo</th>
			<th>VeliTelNo</th>
			<th>TelNo</th>
			<th>OdemeSekli</th>
			<th>OdemeTutari</th>
			<th>OdemeZamani</th>
			<th width="80">İşlemler</th>
			<th width="80">İşlemler</th>
		</tr>

		<?php

		$ogrencisor=$db->prepare("SELECT * from ogrenci");
		$ogrencisor->execute();

		$say=0;

		while($ogrencicek=$ogrencisor->fetch(PDO::FETCH_ASSOC)) { $say++?>

		<tr>
			<td><?php echo $say; ?></td>
			<td><?php echo $ogrencicek['ogrenci_id'] ?></td>
			<td><?php echo $ogrencicek['ogrenci_AdSoyad'] ?></td>
			<td><?php echo $ogrencicek['ogrenci_TcNo'] ?></td>
			<td><?php echo $ogrencicek['ogrenci_AdresNo'] ?></td>
			<td><?php echo $ogrencicek['ogrenci_TelNo'] ?></td>
			<td><?php echo $ogrencicek['ogrenci_VeliTelNo'] ?></td>
			<td><?php echo $ogrencicek['ogrenci_OdemeSekli'] ?></td>
			<td><?php echo $ogrencicek['ogrenci_OdemeTutari'] ?></td>
			<td><?php echo $ogrencicek['ogrenci_Zaman'] ?></td>
			<td align="center"><a href="duzenle.php?ogrenci_id=<?php echo $ogrencicek['ogrenci_id'] ?>"><button>Düzenle</button></td></a>
			<td align="center"><a href="islem.php?ogrenci_id=<?php echo $ogrencicek['ogrenci_id'] ?>&ogrencisil=ok"><button>Sil</button></td></a>
		</tr>

		<?php } ?>

	</table>

</body>
</html>
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


<div class="container ">
	
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

	

	<form  action="islem1.php" method="POST">
		<input class="my-2" type="text" required="" name="dersane_DigerGiderSekli" placeholder="DigerGiderSekli Giriniz...">
		<input type="text" required="" name="dersane_PersonelAdSoyad" placeholder="PersonelAdSoyad Giriniz...">
		<input type="text" required="" name="dersane_PersonelTcNo" placeholder="PersonelTcNo Giriniz...">
		<input type="text" required="" name="dersane_PersonelAdresNo" placeholder="PersonelAdresNo Giriniz...">
		<input type="text" required="" name="dersane_PersonelTelNo" placeholder="PersonelTelNo Giriniz...">
		<input type="text" required="" name="dersane_PersonelMaasTutari" placeholder="PersonelMaasTutari Giriniz...">
		<input type="text" required="" name="dersane_DigerGiderTutari" placeholder="DigerGiderTutari Giriniz...">
		<input type="date" name="dersane_Zaman">
		<button type="submit" name="insertislemi">Formu Gönder</button>

	</form>

	<br>
    
	<h4>Kayıtların Listelenmesi</h4>
	<hr>




	<table class="table table-dark " style="width: 80%" border="1">
		
		<tr>
			<th>S.NO</th>
			<th>ID</th>
			<th>DigerGiderSekli</th>
			<th>Per.AdSoyad</th>
			<th>Per.TcNo</th>
			<th>Per.AdresNo</th>
			<th>Per.TelNo</th>
			<th>Per.MaasTutari</th>
			<th>DigerGiderTutari</th>
			<th>OdenenZamani</th>
			<th width="80">İşlemler</th>
			<th width="80">İşlemler</th>
		</tr>

		<?php

		$dersanesor=$db->prepare("SELECT * from dersane");
		$dersanesor->execute();

		$say=0;

		while($dersanecek=$dersanesor->fetch(PDO::FETCH_ASSOC)) { $say++?>

		<tr>
			<td><?php echo $say; ?></td>
			<td><?php echo $dersanecek['dersane_id'] ?></td>
			<td><?php echo $dersanecek['dersane_DigerGiderSekli'] ?></td>
			<td><?php echo $dersanecek['dersane_PersonelAdSoyad'] ?></td>
			<td><?php echo $dersanecek['dersane_PersonelTcNo'] ?></td>
			<td><?php echo $dersanecek['dersane_PersonelAdresNo'] ?></td>
			<td><?php echo $dersanecek['dersane_PersonelTelNo'] ?></td>
			<td><?php echo $dersanecek['dersane_PersonelMaasTutari'] ?></td>
			<td><?php echo $dersanecek['dersane_DigerGiderTutari'] ?></td>
			<td><?php echo $dersanecek['dersane_Zaman'] ?></td>
			<td align="center"><a href="duzenle1.php?dersane_id=<?php echo $dersanecek['dersane_id'] ?>"><button>Düzenle</button></td></a>
			<td align="center"><a href="islem1.php?dersane_id=<?php echo $dersanecek['dersane_id'] ?>&dersanesil=ok"><button>Sil</button></td></a>
		</tr>

		<?php } ?>

	</table>

</body>
</html>
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


	
	<?php 

	$ogrencisor=$db->prepare("SELECT * from ogrenci where ogrenci_id=:id");
	$ogrencisor->execute(array(
		'id' => $_GET['ogrenci_id']
	));

	$ogrencicek=$ogrencisor->fetch(PDO::FETCH_ASSOC);

	?>

	<form action="islem.php" class="mt-3" method="POST">

		<input type="text" required="" name="ogrenci_AdSoyad" value="<?php echo $ogrencicek['ogrenci_AdSoyad'] ?>">
		<input type="text" required="" name="ogrenci_TcNo" value="<?php echo $ogrencicek['ogrenci_TcNo'] ?>">
		<input type="text" required="" name="ogrenci_AdresNo" value="<?php echo $ogrencicek['ogrenci_AdresNo'] ?>">
		<input type="text" required="" name="ogrenci_TelNo" value="<?php echo $ogrencicek['ogrenci_TelNo'] ?>">
		<input type="text" required="" name="ogrenci_VeliTelNo" value="<?php echo $ogrencicek['ogrenci_VeliTelNo'] ?>">
		<input type="text" required="" name="ogrenci_OdemeSekli" value="<?php echo $ogrencicek['ogrenci_OdemeSekli'] ?>">
		<input type="text" required="" name="ogrenci_OdemeTutari" value="<?php echo $ogrencicek['ogrenci_OdemeTutari'] ?>">
        <input type="datetime-local" name="ogrenci_Zaman" value="<?php echo $ogrencicek['ogrenci_Zaman'] ?>">

		<input type="hidden" value="<?php echo $ogrencicek['ogrenci_id'] ?>" name="ogrenci_id">
		<button class="my-2" type="submit" name="updateislemi">Formu Düzenle</button>

	</form>

</body>
</html>
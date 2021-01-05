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

	$dersanesor=$db->prepare("SELECT * from dersane where dersane_id=:id");
	$dersanesor->execute(array(
		'id' => $_GET['dersane_id']
	));

	$dersanecek=$dersanesor->fetch(PDO::FETCH_ASSOC);

	?>

	<form action="islem.php" class="mt-3" method="POST">

		<input type="text" required="" name="dersane_DigerGiderSekli" value="<?php echo $dersanecek['dersane_DigerGiderSekli'] ?>">
		<input type="text" required="" name="dersane_PersonelAdSoyad" value="<?php echo $dersanecek['dersane_PersonelAdSoyad'] ?>">
		<input type="text" required="" name="dersane_PersonelTcNo" value="<?php echo $dersanecek['dersane_PersonelTcNo'] ?>">
		<input type="text" required="" name="dersane_PersonelAdresNo" value="<?php echo $dersanecek['dersane_PersonelAdresNo'] ?>">
		<input type="text" required="" name="dersane_PersonelTelNo" value="<?php echo $dersanecek['dersane_PersonelTelNo'] ?>">
		<input type="text" required="" name="dersane_PersonelMaasTutari" value="<?php echo $dersanecek['dersane_PersonelMaasTutari'] ?>">
		<input type="text" required="" name="dersane_DigerGiderTutari" value="<?php echo $dersanecek['dersane_DigerGiderTutari'] ?>">
        <input type="datetime-local" name="dersane_Zaman" value="<?php echo $dersanecek['dersane_Zaman'] ?>">

		<input type="hidden" value="<?php echo $dersanecek['dersane_id'] ?>" name="dersane_id">
		<button class="my-2" type="submit" name="updateislemi">Formu Düzenle</button>

	</form>

	<br>
</body>
</html>
<?php
require_once 'baglan.php';

if (isset($_POST['insertislemi'])) {


   $kaydet=$db->prepare("INSERT into ogrenci set
		ogrenci_AdSoyad=:ogrenci_AdSoyad,
		ogrenci_TcNo=:ogrenci_TcNo,
		ogrenci_AdresNo=:ogrenci_AdresNo,
		ogrenci_TelNo=:ogrenci_TelNo,
		ogrenci_VeliTelNo=:ogrenci_VeliTelNo,
		ogrenci_OdemeSekli=:ogrenci_OdemeSekli,
		ogrenci_OdemeTutari=:ogrenci_OdemeTutari,
		ogrenci_Zaman=:ogrenci_Zaman
		");

   $insert=$kaydet->execute(array(

		'ogrenci_AdSoyad' => $_POST['ogrenci_AdSoyad'],
		'ogrenci_TcNo' => $_POST['ogrenci_TcNo'],
		'ogrenci_AdresNo' => $_POST['ogrenci_AdresNo'],
		'ogrenci_TelNo' => $_POST['ogrenci_TelNo'],
	    'ogrenci_VeliTelNo' => $_POST['ogrenci_VeliTelNo'],
	    'ogrenci_OdemeSekli' => $_POST['ogrenci_OdemeSekli'],
	    'ogrenci_OdemeTutari' => $_POST['ogrenci_OdemeTutari'],
	    'ogrenci_Zaman' => $_POST['ogrenci_Zaman']
	));

	if ($insert) {
		
		//echo "kayıt başarılı";

		Header("Location:index.php?");
		exit;

	} else {

		//echo "kayıt başarısız";
		Header("Location:index.php?");
		exit;
	}
}

if (isset($_POST['updateislemi'])) {
	
	$Ogrenci_id=$_POST['ogrenci_id'];

	$kaydet=$db->prepare("UPDATE ogrenci set
		ogrenci_AdSoyad=:ogrenci_AdSoyad,
		ogrenci_TcNo=:ogrenci_TcNo,
		ogrenci_AdresNo=:ogrenci_AdresNo,
		ogrenci_TelNo=:ogrenci_TelNo,
		ogrenci_VeliTelNo=:ogrenci_VeliTelNo,
		ogrenci_OdemeSekli=:ogrenci_OdemeSekli,
		ogrenci_OdemeTutari=:ogrenci_OdemeTutari,
		ogrenci_Zaman=:ogrenci_Zaman
		where ogrenci_id={$_POST['ogrenci_id']}
		");

	$insert=$kaydet->execute(array(

		'ogrenci_AdSoyad' => $_POST['ogrenci_AdSoyad'],
		'ogrenci_TcNo' => $_POST['ogrenci_TcNo'],
		'ogrenci_AdresNo' => $_POST['ogrenci_AdresNo'],
		'ogrenci_TelNo' => $_POST['ogrenci_TelNo'],
	    'ogrenci_VeliTelNo' => $_POST['ogrenci_VeliTelNo'],
	    'ogrenci_OdemeSekli' => $_POST['ogrenci_OdemeSekli'],
	    'ogrenci_OdemeTutari' => $_POST['ogrenci_OdemeTutari'],
	    'ogrenci_Zaman' => $_POST['ogrenci_Zaman']
	));
		if ($insert) {
		
		//echo "kayıt başarılı";

		Header("Location:duzenle.php?ogrenci_id=$ogrenci_id");
		exit;

	} else {

		//echo "kayıt başarısız";
		Header("Location:duzenle.php?ogrenci_id=$ogrenci_id");
		exit;
	}

}

if ($_GET['ogrencisil']=="ok") {
	

	$sil=$db->prepare("DELETE from ogrenci where ogrenci_id=:id");
	$kontrol=$sil->execute(array(
		'id' => $_GET['ogrenci_id']
	));
	if ($kontrol) {
		
		//echo "kayıt başarılı";

		Header("Location:index.php?");
		exit;

	} else {

		//echo "kayıt başarısız";
		Header("Location:index.php?");
		exit;
	}
}


?>
<?php
require_once 'baglan.php';

if (isset($_POST['insertislemi'])) {


   $kaydet=$db->prepare("INSERT into dersane set
		dersane_DigerGiderSekli=:dersane_DigerGiderSekli,
		dersane_PersonelAdSoyad=:dersane_PersonelAdSoyad,
		dersane_PersonelTcNo=:dersane_PersonelTcNo,
		dersane_PersonelAdresNo=:dersane_PersonelAdresNo,
		dersane_PersonelTelNo=:dersane_PersonelTelNo,
		dersane_PersonelMaasTutari=:dersane_PersonelMaasTutari,
		dersane_DigerGiderTutari=:dersane_DigerGiderTutari,
		dersane_Zaman=:dersane_Zaman
		");

   $insert=$kaydet->execute(array(

		'dersane_DigerGiderSekli' => $_POST['dersane_DigerGiderSekli'],
		'dersane_PersonelAdSoyad' => $_POST['dersane_PersonelAdSoyad'],
		'dersane_PersonelTcNo' => $_POST['dersane_PersonelTcNo'],
		'dersane_PersonelAdresNo' => $_POST['dersane_PersonelAdresNo'],
		'dersane_PersonelTelNo' => $_POST['dersane_PersonelTelNo'],
	    'dersane_PersonelMaasTutari' => $_POST['dersane_PersonelMaasTutari'],
	    'dersane_DigerGiderTutari' => $_POST['dersane_DigerGiderTutari'],
	    'dersane_Zaman' => $_POST['dersane_Zaman']
	));
if ($insert) {
		
		//echo "kayıt başarılı";

		Header("Location:index1.php?");
		exit;

	} else {

		//echo "kayıt başarısız";
		Header("Location:index1.php?");
		exit;
	}
}

if (isset($_POST['updateislemi'])) {
	
	$dersane_id=$_POST['dersane_id'];

	$kaydet=$db->prepare("UPDATE dersane set
		dersane_DigerGiderSekli=:dersane_DigerGiderSekli,
		dersane_PersonelAdSoyad=:dersane_PersonelAdSoyad,
		dersane_PersonelTcNo=:dersane_PersonelTcNo,
		dersane_PersonelAdresNo=:dersane_PersonelAdresNo,
		dersane_PersonelTelNo=:dersane_PersonelTelNo,
		dersane_PersonelMaasTutari=:dersane_PersonelMaasTutari,
		dersane_DigerGiderTutari=:dersane_DigerGiderTutari,
		dersane_Zaman=:dersane_Zaman
		where dersane_id={$_POST['dersane_id']}
		");

	$insert=$kaydet->execute(array(

		'dersane_DigerGiderSekli' => $_POST['dersane_DigerGiderSekli'],
		'dersane_PersonelAdSoyad' => $_POST['dersane_PersonelAdSoyad'],
		'dersane_PersonelTcNo' => $_POST['dersane_PersonelTcNo'],
		'dersane_PersonelAdresNo' => $_POST['dersane_PersonelAdresNo'],
		'dersane_PersonelTelNo' => $_POST['dersane_PersonelTelNo'],
	    'dersane_PersonelMaasTutari' => $_POST['dersane_PersonelMaasTutari'],
	    'dersane_DigerGiderTutari' => $_POST['dersane_DigerGiderTutari'],
	    'dersane_Zaman' => $_POST['dersane_Zaman']
	));
if ($insert) {
		
		//echo "kayıt başarılı";

		Header("Location:duzenle1.php?dersane_id=$dersane_id");
		exit;

	} else {

		//echo "kayıt başarısız";
		Header("Location:duzenle1.php?dersane_id=$dersane_id");
		exit;
	}
}

if ($_GET['dersanesil']=="ok") {
	

	$sil=$db->prepare("DELETE from dersane where dersane_id=:id");
	$kontrol=$sil->execute(array(
		'id' => $_GET['dersane_id']
	));
if ($kontrol) {
		
		//echo "kayıt başarılı";

		Header("Location:index1.php?");
		exit;

	} else {

		//echo "kayıt başarısız";
		Header("Location:index1.php?");
		exit;
	}
	
}

?>
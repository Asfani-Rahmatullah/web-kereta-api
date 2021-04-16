<?php
	session_start();
	if (isset($_GET["id_kereta"])) {
		include 'connect.php';
		$connection->query("DELETE FROM kereta WHERE id_KA = ".$_GET["id_kereta"]);
	}

	elseif (isset($_GET["id_pembeli"])) {
		include 'connect.php';
		
		$connection->query("DELETE FROM pembeli WHERE id_pembeli = ".$_GET["id_pembeli"]);
	}

	elseif (isset($_GET["id_tiket"])) {
		include 'connect.php';
		
		$connection->query("DELETE FROM tiket WHERE id_tiket = ".$_GET["id_tiket"]);
	}

	elseif (isset($_GET["semua_idTiket"])) {
		include 'connect.php';
		
		$connection->query("DELETE FROM tiket WHERE id_tiket = ".$_GET["id_tiket"]);
		$connection->query("DELETE FROM pembeli WHERE id_pembeli = ".$_GET["semua_idPembeli"]);
		header ("location:index.php");
		exit();
	}
	header("location:admin.php");
	exit();
?>
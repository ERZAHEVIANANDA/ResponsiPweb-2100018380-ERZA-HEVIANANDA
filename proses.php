<?php 
	echo "<head><tittle> DONE THANK YOU FOR YOUR RSV </head></tittle>";
    $tgl = date('Y-m-d');
    $nama = $_POST['name'];
    $style = $_POST['style'];
    $saat = $_POST['saat'];
    $tanggal = $_POST['tanggal'];
    $jam = (float)$_POST['jam'];
    $kontak = (float)$_POST['kontak'];

    $fp  = fopen("file.txt", "a+");
    fputs($fp,"$tgl|$nama|$style|$saat|$tanggal|$jam|$kontak\n");    
    fclose($fp);
    echo "<a href = index.html>  BACK TO HOME <br/> </a>";
?>

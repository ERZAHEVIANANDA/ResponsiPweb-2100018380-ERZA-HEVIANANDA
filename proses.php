<?php 
	echo "<head><tittle> DONE THANK YOU FOR YOUR RSV </head></tittle>";
    $tgl = date('Y-m-d');
    $nama = $_POST['name'];
    $style = $_POST['style'];
    $hari = $_POST['hari'];
    $tanggal = $_POST['tanggal'];
    $waktu = (float)$_POST['waktu'];
    $kontak = (float)$_POST['kontak'];

    $fp  = fopen("file.txt", "a+");
    fputs($fp,"$tgl|$nama|$style|$hari|$tanggal|$waktu|$kontak\n");    
    fclose($fp);
    echo "<a href = index.html> HOME </a><br>";
?>

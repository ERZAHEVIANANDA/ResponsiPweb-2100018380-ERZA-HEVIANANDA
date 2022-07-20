<?php
    echo "<head><title> MY GUEST RSV</title></head>";
        $fp = fopen("file.txt", "r");
          echo "<center>";
          echo "<br><b>DATA PELANGGAN</b>";
          echo "<br><br>";
          echo "<table>";
          echo "<table border='1' width='70%' style='text-align: center;'>";
          echo "<tr>
            <td>Tanggal</td>  
            <td>Nama</td>
            <td>Model Potongan</td>
            <td>Hari</td>
            <td>Tanggal Booking</td>
            <td>Waktu</td>
            <td>Kontak</td>
            </tr>";
            {
    while ($isi = fgets($fp)) {
        $pisah = explode('|', $isi);
            echo "<br>";
            echo "<tr>
                <td>$pisah[0]</td>  
                <td>$pisah[1]</td>
                <td>$pisah[2]</td>
                <td>$pisah[3]</td>
                <td>$pisah[4]</td>
                <td>$pisah[5]</td>
                <td>$pisah[6]</td>
                </tr>";
                }
            }
        echo "</table></center>";
?>
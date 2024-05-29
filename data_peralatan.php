<h2>Data Peralatan</h2>

<table border="1" style="border-collapse: collapse;">
    <tr bgcolor="#eee">
        <th width="50">No</th> 
        <th width="80">Kode Alat</th>
        <th width="150">Nama Peralatan</th> 
        <th width="70">Jumlah</th>
    </tr>

<?php
include "koneksi.php";
$no=1;
$ambildata = mysqli_query($koneksi,"SELECT * FROM peralatan") or die(mysqli_error($koneksi));

while($tampil = mysqli_fetch_array($ambildata)){
    echo "
    <tr>
        <td align='center'>$no</td>
        <td align='center'>$tampil[kd_alat]</td>
        <td>$tampil[nama_alat]</td>
        <td align='right'>$tampil[jumlah]</td>
    <tr>";
    $no++;
    }
    ?>
</table>
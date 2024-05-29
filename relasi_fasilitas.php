<h2>Data Fasilitas Jabatan</h2>

<table border="1" style="border-collapse: collapse;">
    <tr bgcolor="#eee">
        <th width="50">No</th> 
        <th width="120">Jabatan</th>
        <th width="150">Fasilitas</th>
    </tr>

<?php
include "koneksi.php";
$no=1;
$ambildata = mysqli_query($koneksi,"SELECT * FROM jabatan, peralatan, fasilitas WHERE jabatan.id_jab = fasilitas.id_jab and fasilitas.id_alat = peralatan.id_alat") or die(mysqli_error($koneksi));

while($tampil = mysqli_fetch_array($ambildata)){
    echo "
    <tr>
        <td align='center'>$no</td>
        <td align='left'>$tampil[nama_jab]</td>
        <td align='center'>$tampil[nama_alat]</td>
    <tr>";
    $no++;
    }
    ?>
</table>
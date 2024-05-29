<h2>Data Kepala Jabatan</h2>

<table border="1" style="border-collapse: collapse;">
    <tr bgcolor="#eee">
        <th width="50">No</th> 
        <th width="100">Jabatan</th>
        <th width="150">Nama Karyawan</th>
    </tr>

<?php
include "koneksi.php";
$no=1;
$ambildata = mysqli_query($koneksi,"SELECT * FROM kepala_jab, karyawan WHERE kepala_jab.id_kar = karyawan.id_kar") or die(mysqli_error($koneksi));

while($tampil = mysqli_fetch_array($ambildata)){
    echo "
    <tr>
        <td align='center'>$no</td>
        <td align='left'>$tampil[jabatan]</td>
        <td align='center'>$tampil[nama]</td>
    <tr>";
    $no++;
    }
    ?>
</table>
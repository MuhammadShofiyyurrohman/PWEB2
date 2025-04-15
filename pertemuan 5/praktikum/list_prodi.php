<?php
require_once 'dbkoneksi.php';

// 4) DEFINISIKAN QUERY
$sql = "SELECT * FROM mahasiswa ORDER BY thn_masuk DESC";
// 5) JALANKAN QUERY
$rs = $db->query($sql);
// 6) TAMPILKAN HASIL QUERY
?>
<table border="1" width="100%">
    <tr><th>NO</th><th>KODE</th><th>NAMA PRODI</th>
    <th>KEPALA PRODI</th><th>AKSI</th></tr>
<?php
$nomor = 1;
foreach ($rs as $row) {
?>
<tr>
    echo "<tr>";
    echo "<td>".$nomor."</td>";
    echo "<td>".$row['kode_prodi']."</td>";
    echo "<td>".$row['nama_prodi']."</td>";
    echo "<td>".$row['kaprodi']."</td>";
    <td>
    <a href='edit_prodi.php?kode_prodi=".$row['kode_prodi']."'>Edit</a> | ";
    <a href='delete_prodi.php?kode_prodi=".$row['kode_prodi']."'>Delete</a>
    </td>";
    echo "</tr>";
    $nomor++;
}

</table>
<?php
require_once 'dbkoneksi.php';

// 4) DEFINISIKAN QUERY
$sql = "SELECT * FROM mahasiswa ORDER BY thn_masuk DESC";
// 5) JALANKAN QUERY
$rs = $db->query($sql);
// 6) TAMPILKAN HASIL QUERY
foreach ($rs as $row) {
    echo "<br>".$row->nim .' - '. $row->nama;
}
?>
<?php

//FUNGSI SALAM DENGAN PARAMETER $nama
function salam($nama="RAHMAN"){
    echo "HELLO, SELAMAT DATANG!!", $nama;
}
?>
 <h1>BELAJAR FUNGSI</h1>
 <?php
    salam("RAHMAN");
    echo"<br>";
    salam();
 ?>
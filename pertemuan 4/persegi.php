<?php
// class PersegiPanjang
// property panjang
// property lebar
class PersegiPanjang {
    public $panjang;
    public $lebar;

    // constructor persegi panjang
    function __construct($panjang, $lebar) {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    // method untuk menghitung luas persegi panjang
    function getLuas() {
        $luas = $this->panjang * $this->lebar;
        return $luas;
    }

    // method untuk menghitung keliling persegi panjang
    function getKeliling() {
        $keliling = 2 * ($this->panjang + $this->lebar);
        return $keliling;
    }   
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div clas="section">
        <h2>Contoh Penggunaan persegi panjang</h2>

        <?php
        $pp = new PersegiPanjang(10, 8);

        echo "panjang : " . $pp->panjang. "<br>";
        echo "lebar : " . $pp->lebar. "<br>";
        echo '<hr>';
        echo "luas : " . $pp->getLuas(). "<br>";
        echo "keliling : " . $pp->getKeliling(). "<br>";
        ?>
    </div>
</body>
</html>
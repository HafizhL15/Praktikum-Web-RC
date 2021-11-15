   

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="layout.css" media="screen" title="no title">
</head>
<body>
    <div id="daftar2">
    <?php

    include "forms.php";

    class buah{
    var $jenisMangga, $jenisJambu, $jenisSalak;
   
    public function __construct($mangga, $jambu, $salak){
        $this->mangga = $mangga;
        $this->jambu = $jambu;
        $this->salak = $salak;
    }

    public function getMangga(){
        $this->jenisMangga = $this->mangga * 15000;
        echo "<div class=bottom>Harga Mangga :  {$this->jenisMangga}</div><br>";
    }

    public function getJambu(){
        $this->jenisJambu = $this->jambu * 13000;
        echo "<div class=bottom>Harga Jambu :  {$this->jenisJambu}</div><br>";
    }

    public function getSalak(){
        $this->jenisSalak = $this->salak * 10000;
        echo "<div class=bottom>Harga Salak :  {$this->jenisSalak}</div><br>";
    }

    public function total(){
        $total = $this->jenisMangga + $this->jenisJambu + $this->jenisSalak;
        echo "<div class=bottom>Total Belanjaan : {$total} </div><br>";
    }
    }

    $mangga = $_POST["mangga"];
    $jambu = $_POST["jambu"];
    $salak = $_POST["salak"];
    $transaksi = new buah($mangga, $jambu, $salak);
    $transaksi->getMangga();
    $transaksi->getJambu();
    $transaksi->getSalak();
    $transaksi->total();
    ?>
    </div>

</body>
</html>

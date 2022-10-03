<?php
// 203040164 - Mochamad Yazman Yazid
?>

<?php


// manjual produk
// komik
// game

class Produk
{
  public $judul,
    $penulis,
    $penerbit,
    $harga;

  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
  {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }

  public function getLabel()
  {
    return "$this->penulis, $this->penerbit";
  }
}

class CetakInfoProduk
{
  public function cetak(Produk $produk)
  {
    $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
    return $str;
  }
}

$produk1 = new Produk("Si Juki", "Fazameonk", "Bukune", 50000);
$produk2 = new Produk("Minecraft", "Markus", "Mojang Studios", 100000);


echo "Game : " . $produk2->getLabel();
echo "<br>";
echo "Komik : " . $produk1->getLabel();
echo "<br>";

$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);

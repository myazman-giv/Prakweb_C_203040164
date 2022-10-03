<?php
// 203040164 - Mochamad Yazman Yazid
?>

<?php


// manjual produk
// komik
// game

class Produk
{
  public $judul = "judul",
    $penulis = "penulis",
    $penerbit = "penerbit",
    $harga = 0;

  public function getLabel()
  {
    return "$this->judul, $this->penulis";
  }
}

// $produk1 = new Produk();
// $produk1->judul = "Tsubasa";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "Minecraft";
// $produk2->tambahProperty = "Tes";
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "Si Juki";
$produk3->penulis = "Fazameonk";
$produk3->penerbit = "Bukune";
$produk3->harga = "50000";

$produk4 = new Produk();
$produk4->judul = "Minecraft";
$produk4->penulis = "Markus";
$produk4->penerbit = "Mojang Studios";
$produk4->harga = "100000";

echo "Game : " . $produk4->getLabel();
echo "<br>";
echo "Komik : " . $produk3->getLabel();

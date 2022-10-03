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
    $harga,
    $jmlHalaman,
    $wktMain;

  public function __construct(
    $judul = "judul",
    $penulis = "penulis",
    $penerbit = "penerbit",
    $harga = 0,
    $jmlHalaman = 0,
    $wktMain = 0,

  ) {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
    $this->jmlHalaman = $jmlHalaman;
    $this->wktMain = $wktMain;
  }

  public function getLabel()
  {
    return "$this->penulis, $this->penerbit";
  }

  public function getInfoProduk()
  {
    $str = "{$this->judul} | {$this->getLabel()}, ({Rp. {$this->harga})";

    return $str;
  }
}

class Komik extends Produk
{
  public function getInfoProduk()
  {
    $str = "Komik : {$this->judul} | {$this->getLabel()}, ({Rp. {$this->harga}) - {$this->jmlHalaman}
     Halaman.";
    return $str;
  }
}

class Game extends Produk
{
  public function getInfoProduk()
  {
    $str = "Game : {$this->judul} | {$this->getLabel()}, ({Rp. {$this->harga}) ~ {$this->wktMain}
     Jam.";
    return $str;
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

$produk1 = new Komik("Si Juki", "Fazameonk", "Bukune", 50000, 100, 0);
$produk2 = new Game("Minecraft", "Markus", "Mojang Studios", 100000, 0, 250);

//komik : Si Juki | Fazameonk, Bukune (Rp. 50000) - 200 Halaman.
//game : Minecraft | Markus, Mojang Studios, (Rp. 100000) - 250 jam.

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();

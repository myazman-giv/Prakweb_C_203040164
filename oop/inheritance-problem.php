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
    $wktMain,
    $tipe;

  public function __construct(
    $judul = "judul",
    $penulis = "penulis",
    $penerbit = "penerbit",
    $harga = 0,
    $jmlHalaman = 0,
    $wktMain = 0,
    $tipe
  ) {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
    $this->jmlHalaman = $jmlHalaman;
    $this->wktMain = $wktMain;
    $this->tipe = $tipe;
  }

  public function getLabel()
  {
    return "$this->penulis, $this->penerbit";
  }

  public function getInfoLengkap()
  {
    //komik : Si Juki | Fazameonk, Bukune (Rp. 50000) - 200 Halaman.
    $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()}, ({Rp. {$this->harga})";
    if ($this->tipe == "Komik") {
      $str .= " - {$this->jmlHalaman} Halaman.";
    } else if ($this->tipe == "Game") {
      $str .= " ~ {$this->wktMain} Jam.";
    }
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

$produk1 = new Produk("Si Juki", "Fazameonk", "Bukune", 50000, 100, 0, "Komik");
$produk2 = new Produk("Minecraft", "Markus", "Mojang Studios", 100000, 0, 250, "Game");

//komik : Si Juki | Fazameonk, Bukune (Rp. 50000) - 200 Halaman.
//game : Minecraft | Markus, Mojang Studios, (Rp. 100000) - 250 jam.\

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();

<?php

class Kendaraan
{
    // properties
    private $merk;
    private $harga;
    private $status;
    protected $warna;

    // methods
    public function bacaMerk($merk){
        $this->merk = $merk;
        return "Kendaraan Ini Adalah " . $this->merk;

    }
    public function bacaHarga($harga){
        $this->harga = $harga;
        return "Seharga " .$this->harga;
    }
    public function bacaStatus($status){
        $this->status = $status;
        return $this->status;
    }

}
class Mobil extends Kendaraan
{
    public $name;
    public function bacaNama($name){
        $this->name = $name;
        return $this->name;
    }
    public function __construct()
  {
    echo "Ini adalah UTS Pemograman Web 2 {$this->bacaNama('Ikhsan Hadi Nugraha')} .";
    echo "<br>";
  }
  public function bacaWarna($warna){
    $this->warna = $warna;
    return $this->warna;
}

}

$hasil = new Mobil();
echo $hasil->bacaMerk("Honda").".";
echo "<br>";
echo "Jenis kendaraan ini adalah Mobil yang " . $hasil->bacaStatus("Mahal") . 
    " dengan warna " . $hasil->bacaWarna("Hitam");
echo "<br>";
echo $hasil->bacaHarga("300 Juta");





?>
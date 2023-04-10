<?php 

class Persegi_Panjang {
    //Membuat Property
    public $panjang;
    public $lebar;

    //Membuat Method
    public function __construct($p , $l ){
        $this->panjang = $p;
        $this->lebar = $l;
    }

    public function luas(){
        return $this->panjang * $this->lebar ;
    }

    public function keliling(){
        return 2 * ($this->panjang + $this->lebar) ;
    }

}

// //Membuat Objek / Instance
// $Persegipanjang1 = new Persegi_Panjang (5 , 10);
// echo "Luas Persegi Panjang = " . $Persegipanjang1-> luas() . " cm";
// echo "<br>";
// echo "Keliling Persegi Panjang = " . $Persegipanjang1-> keliling() . " cm";

// echo "<hr>";

// $Persegipanjang2 = new Persegi_Panjang(10 , 7);
// echo "Luas Persegi Panjang = " . $Persegipanjang2-> luas() . " cm";
// echo "<br>";
// echo "Keliling Persegi Panjang = " . $Persegipanjang2-> keliling() . " cm";

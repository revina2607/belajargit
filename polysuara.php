<?php

class Hewan {
    public function suara (){
        echo "Hewan mengeluarkan suara" ;
    }
}

class Kucing extends Hewan {
    public function suara(){
        echo "Meong";
    }
}

class Anjing extends Hewan {
    public function suara() {
        echo "Guk guk";
    }
}

$Kucing = new Kucing();
$Anjing = new Anjing();

$Kucing->suara();
echo "<br>";

$Anjing->suara();
?>
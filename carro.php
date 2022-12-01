<?php

class carro {

public $modelo = "Palio 1,0";
public $marca = "Fiat";
public $cor = "AZUL";
public $Tipo = "Passeio ";
public $tipo_combustivel = "Gasolina";

public function apresentar () {

echo "modelo :{$this->modelo }<br>";
echo "marca :{$this->marca }<br>";
echo "Tipo :{$this->Tipo }<br>";



}


}
$carro1 = new carro ();
$carro1 -> apresentar ();


<?php

class escola{

public $aluno = "Ricardo";
public $biblioteca ="livro";
public $diretora = "Vera";
public $turma = "modulo 2";
public $secretaria = "Fernanda";


public function apresentar()

{
echo"aluno :{$this -> aluno} <br>";
echo"biblioteca :{$this -> biblioteca} <br>";
echo"diretora :{$this -> diretora} <br>";


}


}

$escola = new escola ();
$escola -> apresentar();


<?php

require_once('character.php');

class Doraemon extends character{

  public function cry(){
    echo 'ぼくドラえもんです';
    echo '<br>';
  }

  public function attack()
  {
    $this->smallLight();
  }

  public function smallLight()
  {
    echo 'スモールライト';
    echo '<br>';
  }


}
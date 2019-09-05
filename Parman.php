<?php

require_once('character.php');

class Parman extends character{

  public function cry(){
    echo 'ママー！';
    echo '<br>';
  }

  public function attack()
  {
    $this->copyRobot();
  }

  public function copyRobot()
  {
    echo 'コピーロボットの攻撃';
    echo '<br>';
  }


}
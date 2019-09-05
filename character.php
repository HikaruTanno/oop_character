<?php

class character
{
  public $hp;

  public $mp;

  public $name;

  public function __construct($hp,$mp,$name)
  {
    $this->hp = $hp;
    $this->mp = $mp;
    $this->name = $name;
    echo $name.'が誕生した';
    echo '<br>';

  }

  public function cry()
  {
    echo 'こんにちは';
    echo '<br>';
  }

  public function attack()
  {
    echo '技を覚えていません';
    echo '<br>';
  }
}
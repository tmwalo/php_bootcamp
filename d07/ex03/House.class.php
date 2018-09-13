<?php

  abstract class House {

    abstract public function getHouseName();
    abstract public function getHouseMotto();
    abstract public function getHouseSeat();
    public function introduce()
    {
      $intro = "House " . $this->getHouseName() . " of " . $this->getHouseSeat() . " : \"" . $this->getHouseMotto() . "\"" . PHP_EOL;
      echo $intro;
    }

  }

?>

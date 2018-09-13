<?php

  class NightsWatch
  {
    public $recruits = array();

    public function recruit($person)
    {
      $this->recruits[] = $person;
    }

    public function fight()
    {
      foreach ($this->recruits as $value) {
        if ($value instanceof IFighter) {
          $value->fight();
        }
      }
    }
  }

?>

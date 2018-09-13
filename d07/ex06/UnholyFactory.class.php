<?php

  class UnholyFactory {

    public $fighters = array();

    public function absorb($fighter)
    {
      if (in_array($fighter, $this->fighters))
        echo "(Factory already absorbed a fighter of type " . $fighter->type . ")" . PHP_EOL;
      else {
        if ($fighter instanceof Fighter) {
          $this->fighters[] = $fighter;
          echo "(Factory absorbed a fighter of type " . $fighter->type . ")" . PHP_EOL;
        }
        else
          echo "(Factory can't absorb this, it's not a fighter)" . PHP_EOL;
      }
    }

    public function fabricate($fighter)
    {
      foreach ($this->fighters as $key => $absorbed_fighter) {
        if ($fighter === $absorbed_fighter->type) {
          echo "(Factory fabricates a fighter of type $absorbed_fighter->type)" . PHP_EOL ;
          return (clone $absorbed_fighter);
        }
      }
      echo "(Factory hasn't absorbed any fighter of type $fighter)" . PHP_EOL;
      return (NULL);
    }

  }

?>

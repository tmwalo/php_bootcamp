<?php

  class Jaime {

    public function sleepWith($person)
    {
      if ($person instanceof Tyrion) {
        $response = "Not even if I'm drunk !" . PHP_EOL;
        echo $response;
      }
      else if ($person instanceof Sansa) {
        $response = "Let's do this." . PHP_EOL;
        echo $response;
      }
      else if ($person instanceof Cersei) {
        $response = "With pleasure, but only in a tower in Winterfell, then." . PHP_EOL;
        echo $response;
      }
    }

  }

?>

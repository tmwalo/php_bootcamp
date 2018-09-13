<?php

  class Tyrion {

    public function sleepWith($person)
    {
      if ($person instanceof Jaime) {
        $response = "Not even if I'm drunk !" . PHP_EOL;
        echo $response;
      }
      else if ($person instanceof Sansa) {
        $response = "Let's do this." . PHP_EOL;
        echo $response;
      }
      else if ($person instanceof Cersei) {
        $response = "Not even if I'm drunk !" . PHP_EOL;
        echo $response;
      }
    }

  }

?>

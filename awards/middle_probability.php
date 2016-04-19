<?php

require_once "abstract_level.php";

abstract class MiddleProbability extends AbstractLevelAward {

      public function get_name() {
            return "Middle Probability " . $this->level;
      }

      public function get_icon() {
            return $this->king ? "king.png" : "middle_prob_" . $this->level . ".png";
      }

      public function get_description() {
            return "Over " . $this->fraction . "% mean middle probability fraction";
      }

      public function is_granted($relay) {
            return $relay->middle_probability * 100 >= $this->fraction;
      }
}

class MiddleProbability1 extends MiddleProbability {

      public function __construct() {
            parent::__construct(1, 0.001, 1);
      }
}

class MiddleProbability2 extends MiddleProbability {

      public function __construct() {
            parent::__construct(2, 0.01, 2);
      }
}

class MiddleProbability3 extends MiddleProbability {

      public function __construct() {
            parent::__construct(3, 0.1, 5);
      }
}

class MiddleProbability4 extends MiddleProbability {

      public function __construct() {
            parent::__construct(4, 0.5, 10);
      }
}

class MiddleProbability5 extends MiddleProbability {

      public function __construct() {
            parent::__construct(5, 1, 20);
      }
}

class MiddleProbability6 extends MiddleProbability {

      public function __construct() {
            parent::__construct(6, 2, 30, true);
      }
}

?>

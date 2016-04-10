<?php

class MiddleProbability2 extends Award {

      public function get_name() {
            return "Middle Probability 2";
      }

      public function get_icon() {
            return "middle_prob_2.png";
      }

      public function get_description() {
            return "Over 0.5% mean middle probability fraction";
      }

      public function is_granted($relay) {
            return $relay->middle_probability >= 0.5;
      }

}

?>

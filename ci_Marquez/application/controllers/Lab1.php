<?php

class Lab1 extends CI_Controller {

    public function diamond() {
        $a = $this->uri->segment(3);
        echo "<pre>";
        for ($i = 1; $i < $a; $i++) {
            for ($j = $i; $j < $a; $j++)
                echo "&nbsp;&nbsp;";
            for ($j = 2 * $i - 1; $j > 0; $j--)
                echo ("&nbsp;*");
            echo "<br>";
        }
        $x = $a;
        for ($i = $a; $i > 0; $i--) {
            for ($j = $x - $i; $j > 0; $j--)
                echo "&nbsp;&nbsp;";
            for ($j = 2 * $i - 1; $j > 0; $j--)
                echo ("&nbsp;*");
            echo "<br>";
        }
        echo "</pre>";
    }

    public function hourglass() {
        $a = $this->uri->segment(3);
        echo "<pre>";

        $x = $a;
        for ($i = $a; $i > 1; $i--) {
            for ($j = $x - $i; $j > 0; $j--)
                echo "&nbsp;&nbsp;";
            for ($j = 2 * $i - 1; $j > 0; $j--) {
                echo ("&nbsp;*");
            }

            echo "<br>";
        }

        for ($i = 1; $i < $a; $i++) {
            for ($j = $i; $j < $a; $j++)
                echo "&nbsp;&nbsp;";
            for ($j = 2 * $i - 1; $j > 0; $j--)
                echo "&nbsp;*";
            echo "<br>";
        }
        echo "</pre>";
    }

    public function box() {
        $a = $this->uri->segment(3);
        echo "<pre>";

        for ($i = 0; $i < $a; $i++) {
            for ($j = 0; $j < $a; $j++){
               if($i == 0 || $i == $a-1  && $j == 0 || $j == $a-1){
                   echo '+';
               }else if($i == 0 || $i == $a-1 && $j > 0 && $j < $a-1 ){
                   echo '-';
               }else if($i > 0 && $i < $a-1 && $j == 0 || $j==$a-1){
                   echo '|';
               }
            }
            echo '</br>';
        }

        echo "</pre>";
    }

}

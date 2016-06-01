<?php
namespace SimplonReunion;

/**
 * A starter class for the coding dojo.
 * Of course, you can create your own classes.
 */
class Dojo
{
    public function isDojo()
    {
        return true;
    }

    public function fizzBuzz()
    {

        $tableau = [];
        for ($i = 1; $i <= 100; $i++) {
            if ($i % 3 == 0 && $i % 5 != 0) {
                $tableau[$i] = "Fizz";
            } elseif ($i % 5 == 0 && $i % 3 != 0) {
                $tableau[$i] = "Buzz";
            } elseif ($i % 3 == 0 && $i % 5 == 0) {
                $tableau[$i] = "FizzBuzz";
            } else {
                $tableau[$i] = $i;
            }

        }

        return $tableau;

    }

}

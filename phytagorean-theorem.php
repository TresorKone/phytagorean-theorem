<?php

class Pythagorean {

    // pythagorean theorem: a^2 + b^2 = c^2.
    public function pythagorean($a , $b) {
        $abSquares = $a * $a + $b * $b;
        // return the square root of c
        $cSquareRoot = sqrt($abSquares);

        return $cSquareRoot;
    }

    // The result handling will be done in this function who might get call later to make the algorithm work.
    public function result($a, $b) {
        // we check the type of the data entered by the user.
        $getValueTypeA = gettype($a);
        $getValueTypeB = gettype($b);

        // condition for check the data entered by the user.
        if ($getValueTypeA and $getValueTypeB !==  "integer") {
            return print('the data entered might be a number');
        } elseif ($a < 0 || $b < 0) {
            return print('no side of your triangle can be a negative number');
        }

        // And finally if the data entered by the user pass all the condition above we execute this line
        return print_r($this -> pythagorean($a, $b));
    }
}

echo 'This script will determine the hypotenuse hypotenuse of your right-angled triangle' . PHP_EOL;

$test = new Pythagorean();
$test -> result(intval(readline('enter the length of the side a :')), intval(readline('enter the length of the side b :')));
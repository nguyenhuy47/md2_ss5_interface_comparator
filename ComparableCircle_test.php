<?php

include "ComparableCircle.php";

$circleOne = new ComparableCircle('circleOne', 8);
$circleTwo = new ComparableCircle('circleTwo', 8);
$circleThree = new ComparableCircle('circleThree', 4);

$test = $circleOne->compareTo($circleThree);
echo ('Comparable: <br>');
echo $test;
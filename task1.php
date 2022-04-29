<?php
/**
 * Task 1
 */
function repeat($arrayGiven, $repeatTimes = 3) 
{
    $newArray = [];
    for ($i = 0; $i < $repeatTimes; $i++) {
        $newArray = array_merge($newArray, $arrayGiven);
    }
    return $newArray;
}

// var_dump(repeat([1,2,3]));


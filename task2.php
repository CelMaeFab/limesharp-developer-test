<?php
/**
 * Task 2
 */
function reformat($wordGiven)
{
    $vowelsArray = ['a', 'e', 'i', 'o', 'u'];
    $changeWordGiven = strtolower($wordGiven);
    $changeWordGiven = str_replace($vowelsArray, "", $changeWordGiven);
    $changeWordGiven = ucfirst($changeWordGiven);
    return $changeWordGiven;
}

// var_dump(reformat("liMeSHArp DeveLoper TEST"));
<?php
/** 
 * Task 3
 */
function next_binary_number($binaryArray)
{
    $convertToNumbers = implode("", $binaryArray);
    $tempBinaryNumbers = $convertToNumbers;
    $decimalValue = 0;
    $baseNumber = 1;
    
    for ($i = 0; $i < count($binaryArray); $i ++)
    {
        $lastDigit = $tempBinaryNumbers % 10;
        $tempBinaryNumbers = $tempBinaryNumbers / 10;
        $decimalValue += $lastDigit * $baseNumber;
        $baseNumber = $baseNumber*2;
    }

    $decimalValue =  intval($decimalValue) + 1;
    $binaryNumbers = sprintf('%0b',$decimalValue);
    return  $binaryNumbers;
}
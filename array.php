<?php

// 1- A program that calculates the average of the numbers in an array of n elements. 
// The array is filled with random numbers.
        echo "First Problem : <br>";
        $randomNumbers = [];
        for ($i = 0; $i < 10; $i++){
            $randomNumbers[] = rand(1,100);
        }
        echo " Array : " . implode(" / ", $randomNumbers) . "<br>";
        function calculateAverage($numbers){
            $sum = array_sum($numbers);
            $count = count($numbers);
            if ($numbers > 0){
                $average = $sum / $count;
                return $average;
            }else {
                return "Array Is Empty";
            }
        }
        $average = calculateAverage($randomNumbers);
        echo "Average Is". ' : ' .$average.'<br>'.'<br>';
////////////////////////////////////////////
// 2- A program in which an array contains 10 numbers and another array 2D of size 2x5. 
// What is required is that the second array is dictated by the first array.
        echo "Second Problem : ".'<br>';
        $firstArray = [1,2,3,4,5,6,7,8,9,10];
        echo 'First Array Is' .' : ' . implode(', ',$firstArray).'<br>';
        function create2DArray($firstArray){
            if (count($firstArray) == 10){
                $twoDArray = array_chunk($firstArray,5);
                return $twoDArray;
            }else {
                return "The Inputs Less Than 10 Numbers";
            }
        }
        $secondArray = create2DArray($firstArray);
        foreach ($secondArray as $index){
            echo implode(', ',$index).'<br>'.'<br>';
        }
/////////////////////////////////////////////
// 3- A program in which an array of a group of numbers and 
// print the largest and smallest number
// INPUT:
// $array = [ 1,10,5,2,11];
        echo "Third Problem : ".'<br>'; 
        $array = [ 1,10,5,2,11];
        $large = max($array);
        $small = min($array);
        echo "The Largest Number Is : $large" .'<br>';
        echo "The Smallest Number Is : $small" .'<br>'.'<br>';
////////////////////////////////////////////////
// 4- The program, in which an array contains 5 numbers, and you store a number 
// and calculates how many numbers are greater  than or equal 
// and how many numbers are smaller  than this number inside.
// INPUT: 
// $array = [ 1,10,5,2,11]
// $x = 3
        echo "The Fourth Problem : <br>";
        function countNumbers($array,$x){
            $greaterNumber = 0;
            $smallerNumber = 0;
            foreach ($array as $value){
                if ($value >= $x){
                    $greaterNumber++;
                }else {
                    $smallerNumber++;
                }
            }
            return array("greaterNumber" => $greaterNumber,
                         "smallerNumber" => $smallerNumber);
        }
        $array = [ 1,10,5,2,11];
        $x = 3;
        $result = countNumbers($array,$x);
        echo "Array Is : ".implode(', ',$array).'<br>';
        echo "Greater Numbers is : " . $result["greaterNumber"].'<br>';
        echo "Greater Numbers is : " . $result["smallerNumber"].'<br>'.'<br>';
/////////////////////////////////////////////

// 5- Create a function that takes an array of names and returns an array 
// where only the first letter of each name is capitalized.
// INPUT: 
        echo "Fifth Problem : ".'<br>';
        $Array_of_names = ["eraasoft", "backend", "group313"];
        function capitalizeFirst_index($Array_of_names){
            $array = [];
            foreach($Array_of_names as $name){
                $array[] = ucfirst($name);
            }
            return $array;
        } 
        $new_array = capitalizeFirst_index($Array_of_names);
        echo '<pre>';
        print_r($new_array);
        echo '<pre>';
//////////////////////////////////////////////
// 6- Given an integer array nums, move all 0's to the end of it while maintaining 
// the relative order of the non-zero elements.
//  Note that you must do this in-place without making a copy of the array.
// INPUT: 
        echo "Problem Number : 6".'<br>';
        $nums = [0,1,0,3,12]; 
        function moveZeros(&$nums) {   // Relative By Reference (&)
            $nonZeroIndex = 0;
            // Move non-zero
            for ($i = 0; $i < count($nums); $i++) {
                if ($nums[$i] != 0) {
                    $nums[$nonZeroIndex++] = $nums[$i];
                }
            }
            // Fill with zeros
            for ($i = $nonZeroIndex; $i < count($nums); $i++) {
                $nums[$i] = 0;
            }
        }
        moveZeros($nums);
        print_r($nums).'<br>';
///////////////////////////////////////////////////
// 7- Write a function that searches an array of names (unsorted) for the name "Bob" and
//  returns the location in the array. If Bob is not in the array, return -1.
// INPUT:
        echo "Problem Number : 7 <br>"; 
        $names1 = ["Alice", "Bob", "Charlie", "Dave"];
        $names2 = ["Alice", "Charlie", "Dave"];
        function searchName($array){
            foreach($array as $index => $name){
                if ($name == "Bob"){
                    return $index;
                }
            }
            return -1;
        }
        $result1 = searchName($names1);
        $result2 = searchName($names2);
        echo "Result Array1 : $result1"  .'<br>';
        echo "Result Array2 : $result2" .'<br>'.'<br>';
/////////////////////////////////////////////////////
// 8- Create a function that takes a array of numbers and returns
//  the second largest number.
// INPUT: 
        echo "Problem Number : 8 <br>";
        $numbers = [11, 55, 2, 3, 4, 5, 6, 7, 8, 9, 10];
        function getSecond_number($numbers){
            if (count($numbers) < 2){
                echo "The Array is less Than 2 Numbers";
            }
            $maxValue = max($numbers);
            $numbers = array_diff($numbers,[$maxValue]);
            $secondLarge_Number = max($numbers);
            return $secondLarge_Number; 
        }
        $result = getSecond_number($numbers);
        echo "The Second Largest Number is : $result" . '<br>'.'<br>';
//////////////////////////////////////////////////////
// 9- 9.	A program containing an array of different numbers and store a number $x 
// If the number is not in the array prints not found and if it exists prints found and
//  prints this number characteristics like
// ●	Positive or Negative 
// ●	How many digits are in this number 
// ●	Is-Prime or not. 
// ●	odd or even
// ●	read from the right as the left or not such as "505"
// INPUT:
echo "Problem Number : 9 <br>";
$number1 = [11, 55, 24, 43, 44, 545, 6, 777, 810, 94, 140]; $x1 = 545;
$number2 = [11, 55, 24, 43, 44, 545, 6, 777, 810, 94, 140]; $x2 = 1000;
function findNumberCharacteristics($numbers, $x) {
    if (in_array($x, $numbers)) {
        echo "The Number $x is : Found <br>";
        $sign = ($x >= 0)? "Positive" : "Negative";
        echo "The Number $x is : $sign <br>";
        $digitsCount = strlen($x);
        echo "The Length of $x is : $digitsCount <br>";
        $isPrime = isPrime($x);
        echo "The Number $x is : " .($isPrime ? "Prime" : "Not Prime").'<br>';
        $oddOrEven = ($x % 2 == 0) ? "Even" : "Odd";
        echo "The Number $x is : $oddOrEven .<br>";
    } else {
        echo "Number $x Not Found In Array".'<br>';
    }
}
function isPrime($num) {
    if ($num < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}
echo findNumberCharacteristics($number1, $x1).'<br>';
echo findNumberCharacteristics($number2, $x2).'<br>';
















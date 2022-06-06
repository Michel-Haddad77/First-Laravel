<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    //function that calculates the seconds since 14 April 1732
    public function secondsSince(){
        $time_since_1970 = time();
        //between 01 Jan 1970 and 14 April 1732 , there's 86813 days
        $day_difference = 86813;
        $seconds_difference = $day_difference * 86400;
        $message = "Since 14 April 1732 " . $time_since_1970 + $seconds_difference . "secs have passed!!";
        echo $message;

        // return response()->json([
        //     "status" => "Success",
        //     "message" => $message
        // ], 200);
    }

    //function that outputs how many palindromes in the arrays
    public function isPalindrome(){
        $strs = array("civic","abcba","toyota");
        $count = 0;

        foreach ($strs as $value){
            if ($value == strrev($value)){
                $count++;
            }
        }

        echo "there is/are " . $count ." palindrome(s) in the array";
    }
}

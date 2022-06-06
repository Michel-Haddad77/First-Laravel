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

    //function that groups students in 2
    public function groupBy2(){
        $students = array("Michel","Charbel","Tony", "Leila", "Mansour");
        $count = 0;
        $grouped_students = array();
        $temp = array();

        foreach($students as $student){
            if ($count < 2){
                array_push($temp,$student);
                $count++;
            }else{
                array_push($grouped_students,$temp);
                $temp = array();
                array_push($temp,$student);
                $count = 1;
            }
        }
        array_push($grouped_students,$temp);

        echo json_encode($grouped_students);
    }

    //Nominee function
    public function nominee(){
        $students = array("Pablo","Charbel","Tony", "Leila", "Mansour");
        $random_index = rand(0,sizeof($students)-1);
        return "Hilda: And the nominee is... " . $students[$random_index];
    }

    public function dadJoke(){
        $url = "https://icanhazdadjoke.com/slack";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, $url);

        $result = curl_exec($ch);
        $decoded  =json_decode($result, true);

        return $decoded["attachments"][0]["text"];
    }

    public function beerRecipe(){
        $url = "https://api.punkapi.com/v2/beers";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, $url);

        $result = curl_exec($ch);
        $decoded  = json_decode($result, true);
        
        $random_index =  rand(0,sizeof($decoded)-1);

        return $decoded[$random_index]["method"];
    }
}

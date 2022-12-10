<?php
namespace App\Helpers;

class CustomHelper
{
    public static function carTimer(int $val)
    {
        $sum = 0; 
        $rem = 0;  
        if($val > 60) {
            $hours = intval($val/60);
            $min = $val % 60;
            if($hours < 10 && $min < 10) {
                $currenttime = "0".$hours.":"."0".$min;
            } elseif($hours > 10 && $min < 10) {
                $currenttime = $hours.":"."0".$min;
            } else {
                $currenttime = $hours.":".$min;
            }
            $num = $hours."".$min;
        } else {
            $min = $val % 60;
            if($min < 10) {
                $currenttime = "00:0".$min;
            } else {
                $currenttime = "00:".$min;
            }
            $num = "00".$min;
        }
        for ($i = 0; $i <= strlen($num); $i++) {  
            $rem = $num % 10;  
            $sum = $sum + $rem;  
            $num = $num / 10;  
        }  
        $sumofdigits = $sum;
        $result = ['current_time' => $currenttime, 'sumofdigits' => $sumofdigits];
        return json_encode($result);
    }
}

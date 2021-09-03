<?php

namespace App\Utils;

class Sexta {

    private static $contagemPercent = [];

    public static function VerifyGap($contagem, $numberOfTimes) {
        self::numberToPercent($contagem, $numberOfTimes);

        if(
            (
                self::$contagemPercent[0] - self::$contagemPercent[1] <= 2 && 
                self::$contagemPercent[1] - self::$contagemPercent[2] <= 2 && 
                self::$contagemPercent[2] - self::$contagemPercent[3] <= 2 && 
                self::$contagemPercent[3] - self::$contagemPercent[4] <= 2 && 
                self::$contagemPercent[4] - self::$contagemPercent[5] <= 2
            )
        ) {
            return true;
        } 
        return false;
    }

    public static function numberToPercent($contagem, $numberOfTimes) {
        foreach($contagem as $number => $value) {
            $percent = (($contagem[$number] / $numberOfTimes) * 100);
            array_push(self::$contagemPercent, $percent);
        }   
    }

}
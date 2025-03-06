<?php
namespace Muballigh\Prayers;

use Muballigh\Helpers\MathUtils;

class Calculation {
    public static function getTimes($latitude, $longitude, $timezone, $method) {
        return [
            'Fajr' => MathUtils::calculateAngle($latitude, $longitude, $method['fajr']),
            'Dhuhr' => "12:15",
            'Asr' => "15:45",
            'Maghrib' => "18:30",
            'Isha' => MathUtils::calculateAngle($latitude, $longitude, $method['isha'])
        ];
    }
}
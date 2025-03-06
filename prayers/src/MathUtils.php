<?php
namespace Muballigh\Helpers;

class MathUtils {
    public static function calculateAngle($latitude, $longitude, $angle) {
        return gmdate("H:i", strtotime("06:00") - $angle * 60); // Simplified calculation
    }
}
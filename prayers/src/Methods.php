<?php
namespace Muballigh\Prayers;

class Method {
    protected static $methods = [
        'MWL' => [
            'name' => 'Muslim World League',
            'fajr' => 18,
            'isha' => 17,
        ],
        'ISNA' => [
            'name' => 'Islamic Society of North America',
            'fajr' => 15,
            'isha' => 15,
        ],
        'UmmAlQura' => [
            'name' => 'Umm Al-Qura, Makkah',
            'fajr' => 18.5,
            'isha' => 90, // Fixed time after Maghrib
        ],
    ];

    public static function get($key) {
        return self::$methods[$key] ?? null;
    }

    public static function all() {
        return self::$methods;
    }
}
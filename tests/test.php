<?php
require 'vendor/autoload.php';

use Muballigh\Prayers\PrayerTimes;
use Muballigh\Calendars\IslamicCalendar;

$prayerTimes = new PrayerTimes(51.5074, -0.1278, 'Europe/London', 'MWL');
$times = $prayerTimes->calculate();

echo "Prayer Times:\n";
print_r($times);

$hijriDate = IslamicCalendar::toHijri(2024, 3, 6);
echo "Hijri Date: " . $hijriDate . "\n";
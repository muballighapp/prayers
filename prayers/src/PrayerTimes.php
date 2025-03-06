<?php
namespace Muballigh\Prayers;

use Muballigh\Prayers\Method;
use Muballigh\Prayers\Calculation;

class PrayerTimes {
    protected $latitude;
    protected $longitude;
    protected $timezone;
    protected $method;

    public function __construct($latitude, $longitude, $timezone, $methodKey = 'MWL') {
        $this->latitude = $latitude;
        $this->longitude = $longitude;
        $this->timezone = $timezone;
        
        $this->method = Method::get($methodKey);
        if (!$this->method) {
            throw new \Exception("Invalid calculation method: $methodKey");
        }
    }

    public function calculate() {
        return Calculation::getTimes($this->latitude, $this->longitude, $this->timezone, $this->method);
    }
}
<?php

namespace Mostafaznv\NovaMapField\DTOs;

class PointValue
{
    public function __construct(private float $latitude, private float $longitude) {}

    public static function make(float $latitude, float $longitude): self
    {
        return new self($latitude, $longitude);
    }


    public function getLatitude(): ?float
    {
        return $this->latitude;
    }

    public function getLongitude(): ?float
    {
        return $this->longitude;
    }
}

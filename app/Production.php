<?php

namespace App\Production;

class Production
{
    /** @var int */
    private $x;

    /** @var int */
    private $y;

    public function __construct()
    {
        $this->x = 1;
        $this->y = 2;
    }

    public function getX(): int
    {
        return $this->x;
    }

    public function getY(): int
    {
        return (string)$this->y;
    }
}

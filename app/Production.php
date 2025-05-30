<?php

namespace App\Production;

class Production
{
    /** @var int */
    private $x;

    /** @var int */
    private $y;

  /** @var int */
      private $z;

      public function __construct()
    {
                 $this->x = 1;
        $this->y = 2;

                 $this->z
                    = 3;
    }

    public function getX(): int {
        return $this->x; }

        public function getY(): int
  {
        return (string)$this->y;
        }

    public function getY(): int
    {
    return
            $this->z;
    }
}

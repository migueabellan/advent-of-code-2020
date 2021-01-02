<?php

namespace App\Year2015\Day03;

class Grid
{
    public const NORTH = '^';
    public const EAST = '>';
    public const SOUTH = 'v';
    public const WEST = '<';

    private array $grid;
    private int $x;
    private int $y;

    public function __construct(int $x = 0, int $y = 0)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function getGrid(): array
    {
        return $this->grid;
    }

    public function getX(): int
    {
        return $this->x;
    }

    public function getY(): int
    {
        return $this->y;
    }

    public function move(string $direction, int $step = 1): void
    {
        switch ($direction) {
            case self::NORTH:
                $this->y += $step;
                break;
            case self::EAST:
                $this->x += $step;
                break;
            case self::SOUTH:
                $this->y -= $step;
                break;
            case self::WEST:
                $this->x -= $step;
                break;
        }
    }

    public function getFill(int $x, int $y): mixed
    {
        return $this->grid[$x][$y] ?? null;
    }

    public function addPresent(): void
    {
        if (!isset($this->grid[$this->x][$this->y])) {
            $this->grid[$this->x][$this->y] = 0;
        }

        $this->grid[$this->x][$this->y]++;
    }

    public function getPresents(): int
    {
        $presents = 0;

        foreach ($this->grid as $v) {
            $presents += count($v);
        }

        return $presents;
    }
}

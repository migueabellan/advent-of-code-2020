<?php

namespace App\Year2015\Day02;

use App\Controller\AbstractController;

class IndexController extends AbstractController
{
    private function getSurface(int $l, int $w, int $h): int
    {
        return (2 * $l * $w) + ( 2 * $w * $h) + (2 * $h * $l);
    }

    private function getExtra(int $l, int $w, int $h): int
    {
        $areas = [$l * $w, $w * $h, $h * $l];


        return (2 * $l * $w) + ( 2 * $w * $h) + (2 * $h * $l);
    }

    public function read(): array
    {
        $array = [];

        if ($file = fopen($this->getPathIn(), 'r')) {
            while (($line = fgets($file)) !== false) {
                preg_match("~^(?'l'.*)x(?'w'.*)x(?'h'.*)$~", $line, $matches);
                $l = (int)$matches['l'];
                $w = (int)$matches['w'];
                $h = (int)$matches['h'];

                $array[] = [
                    'l' => $l,
                    'w' => $w,
                    'h' => $h
                ];
            }
            fclose($file);
        }

        return $array;
    }

    public function exec1(array $array = []): string
    {
        $result = 0;

        foreach ($array as $present) {
            $areas = [
                $present['l'] * $present['w'],
                $present['w'] * $present['h'],
                $present['h'] * $present['l']
            ];

            $surface = array_reduce($areas, function ($surface, $area) {
                return $surface += (2 * $area);
            }, 0);

            $result += ($surface + min($areas));
        }
        
        return (string)$result;
    }

    public function exec2(array $array = []): string
    {
        $result = 0;

        foreach ($array as $present) {
            $perimeter = [
                2 * $present['l'],
                2 * $present['w'],
                2 * $present['h']
            ];
            sort($perimeter);
            $perimeter = $perimeter[0] + $perimeter[1];

            $volume = $present['l'] * $present['w'] * $present['h'];

            $result += ($perimeter + $volume);
        }
        
        return (string)$result;
    }
}

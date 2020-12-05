<?php

namespace App\Controller;

use App\AbstractController;

class Day05 extends AbstractController
{
    /**
     * @see AbstractController
     */
    public function read(): array
    {
        $array = [];

        if ($file = fopen($this->getPathIn(), 'r')) {
            while (($line = fgets($file)) !== false) {
                $binary = preg_replace(['/F|L/', '/B|R/'], [0, 1], $line);

                $array[bindec($binary)] = bindec($binary);
            }
            fclose($file);
        }

        return $array;
    }

    public function exec1(array $array = []): string
    {
        $result = max($array);

        return (string)$result;
    }

    public function exec2(array $array = []): string
    {
        $result = 0;

        for ($i = min($array); $i < max($array); $i++) {
            if (!isset($array[$i])) {
                $result = $array[$i - 1] + 1;
                break;
            }
        }

        return (string)$result;
    }
}
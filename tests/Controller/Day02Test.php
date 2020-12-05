<?php

namespace Tests\Controller;

use App\Controller\Day02;
use PHPUnit\Framework\TestCase;

class Day02Test extends TestCase
{
    public function testExec1(): void
    {
        $runner = new Day02();

        $array = $runner->read();
        
        $this->assertEquals(454, $runner->exec1($array));
    }

    public function testExec2(): void
    {
        $runner = new Day02();

        $array = $runner->read();
        
        $this->assertEquals(649, $runner->exec2($array));
    }
}

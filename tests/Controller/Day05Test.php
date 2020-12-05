<?php

namespace Tests\Controller;

use App\Controller\Day05;
use PHPUnit\Framework\TestCase;

class Day05Test extends TestCase
{
    public function testExec1(): void
    {
        $runner = new Day05();

        $array = $runner->read();
        
        $this->assertEquals(820, $runner->exec1($array));
    }

    public function testExec2(): void
    {
        $runner = new Day05();

        $array = $runner->read();
        
        $this->assertEquals(120, $runner->exec2($array));
    }
}

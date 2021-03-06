<?php

namespace Tests\Year2020\Day17;

use App\Year2020\Day17\Puzzle;
use PHPUnit\Framework\TestCase;

class PuzzleTest extends TestCase
{
    /**
     * @var Puzzle
     */
    private object $runner;

    /**
     * @var array
     */
    private array $array;

    protected function setUp(): void
    {
        $this->runner = new Puzzle();

        $this->array = $this->runner->read();
    }

    public function testExec1(): void
    {
        $this->assertEquals(280, $this->runner->exec1($this->array));
    }

    public function testExec2(): void
    {
        $this->assertEquals(1696, $this->runner->exec2($this->array));
    }
}

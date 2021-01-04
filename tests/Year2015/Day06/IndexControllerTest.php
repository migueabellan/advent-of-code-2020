<?php

namespace Tests\Year2015\Day06;

use App\Year2015\Day06\IndexController;
use PHPUnit\Framework\TestCase;

class IndexControllerTest extends TestCase
{
    /**
     * @var IndexController
     */
    private object $runner;

    /**
     * @var array
     */
    private array $array;

    protected function setUp(): void
    {
        $this->runner = new IndexController();

        $this->array = $this->runner->read();
    }

    public function testExec1(): void
    {
        $this->assertEquals(377891, $this->runner->exec1($this->array));
    }

    public function testExec2(): void
    {
        $this->assertEquals(14110788, $this->runner->exec2($this->array));
    }
}
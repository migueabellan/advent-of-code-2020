<?php

namespace Tests\Controller\Day16;

use App\Controller\Day16\IndexController;
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
        $this->assertEquals(19060, $this->runner->exec1($this->array));
    }

    public function testExec2(): void
    {
        $this->assertEquals(953713095011, $this->runner->exec2($this->array));
    }
}
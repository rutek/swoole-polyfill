<?php

declare(strict_types=1);

namespace Rutek\SwoolePolyfillTests;

use PHPUnit\Framework\TestCase;
use Swoole\Coroutine\Scheduler;

class SchedulerTest extends TestCase
{
    private $sum = 0;

    public function testRunsAllFunctions()
    {
        $this->sum = 0;

        $scheduler = new Scheduler();
        $scheduler->add(function () {
            $this->sum += 2;
        });
        $scheduler->add(function () {
            $this->sum += 5;
        });
        $scheduler->start();

        $this->assertSame(7, $this->sum, 'Not all functions were done');
    }
}

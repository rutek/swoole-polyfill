<?php

declare(strict_types=1);

namespace Rutek\SwoolePolyfillTests;

use PHPUnit\Framework\TestCase;
use Swoole\Coroutine;

class CoroutineTest extends TestCase
{
    public function testCanInvokeSet()
    {
        $result = Coroutine::set([
            "max_coroutine" => 4096, // max coroutine number can be created, the default value is 4096
            "stack_size" => 8192, // set the stack size of each coroutine, the default value is 8192
        ]);
        $this->assertNull($result);
    }
}

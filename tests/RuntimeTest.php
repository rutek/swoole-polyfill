<?php

declare(strict_types=1);

namespace Rutek\SwoolePolyfillTests;

use PHPUnit\Framework\TestCase;

class RuntimeTest extends TestCase
{
    public function testEnableCanBeCalled()
    {
        $exception = null;
        try {
            \Swoole\Runtime::enableCoroutine();
        } catch (\Throwable $e) {
            $exception = $e;
        }
        $this->assertNull($exception, 'No exceptions are raised');
    }
}

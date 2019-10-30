<?php

declare(strict_types=1);

namespace Swoole;

if (!class_exists(Runtime::class)) {
    class Runtime
    {
        public static function enableCoroutine()
        {
        }
    }
}

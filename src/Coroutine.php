<?php

declare(strict_types=1);

namespace Swoole;

if (!class_exists(Coroutine::class)) {
    class Coroutine
    {
        public static function set($options)
        {
            // Do nothing as it manipulates concurrency which is not supported by polyfill
        }
    }
}

<?php

declare(strict_types=1);

namespace Swoole\Coroutine;

if (!class_exists(Scheduler::class)) {
    class Scheduler
    {
        private $functions;

        public function __construct()
        {
            $this->functions = new \SplStack();
        }

        public function add(callable $fn)
        {
            $this->functions->push($fn);
        }

        public function start()
        {
            while (!$this->functions->isEmpty()) {
                call_user_func($this->functions->pop());
            }
        }
    }
}

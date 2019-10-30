# Swoole Polyfill

Polyfill for basic Swoole methods which allows you to create scripts which will run both with and without Swoole.

Currently contains polyfills for (version 4.1+):

- `\Swoole\Runtime::enableCoroutine()`
- `\Swoole\Coroutine\Scheduler` - `add` & `start` functions

Feel free to create merge requests with more methods and classes! :)

## Running tests

You should do two types of tests:

- one with PHP 7.2+ which does not have Swoole extension
- one with PHP 7.2+ with Swoole extension

Why? First run will make sure that polyfills work properly and second one will tell you if your tests match behaviour of Swoole.

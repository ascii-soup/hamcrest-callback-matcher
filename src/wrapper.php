<?php
use AsciiSoup\Hamcrest\CallbackMatcher;

/**
 * Wrapper function for the callback matcher
 *
 * @param callable $callback
 *
 * @return CallbackMatcher
 */
function matchesUsing(callable $callback)
{
    return new CallbackMatcher($callback);
}

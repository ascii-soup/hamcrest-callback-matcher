<?php
/**
 * Matches against a callback
 */

namespace AsciiSoup\Hamcrest;


use Hamcrest\BaseMatcher;
use Hamcrest\Description;

class CallbackMatcher extends BaseMatcher
{
    /**
     * @var callable
     */
    private $callback;

    function __construct(callable $callback)
    {
        $this->callback = $callback;
    }

    public function matches($item)
    {
        return call_user_func($this->callback, $item);
    }

    public function describeTo(Description $description)
    {
        // No description here
        // Provide a description using describeAs()
        // inside your wrapper function
    }

}

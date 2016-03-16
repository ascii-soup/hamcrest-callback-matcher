<?php

use AsciiSoup\Hamcrest\CallbackMatcher;

class TestObject
{
    public function isTestObject()
    {
        return true;
    }
}

class CallbackMatcherTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    function matches_using_callback()
    {
        $matcher = new CallbackMatcher(
            function ($value) {
                return $value === "Hello, world.";
            }
        );

        assertThat($matcher->matches("Hello, world."), is(identicalTo(true)));
    }

    /**
     * @test
     */
    function matches_using_wrapper()
    {
        assertThat(
            new TestObject(),
                matchesUsing(function(TestObject $object) {
                return $object->isTestObject() === true;
            })
        );
    }
}

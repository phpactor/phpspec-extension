<?php

namespace spec\Phpactor\Extension\PhpSpec\Tests\Example;

use Phpactor\Extension\PhpSpec\Tests\Example\Example;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ExampleSpec extends ObjectBehavior
{
    function it_is_initializable(Foobar $bar)
    {
        $this->shouldHaveType(Example::class);
    }
}

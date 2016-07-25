<?php

use ConceptByte\NullObject\NullObject;

class NullObjectTest extends PHPUnit_Framework_TestCase
{

    /** @test */
    public function it_should_return_an_empty_string()
    {
        $null = NullObject::create();
        $this->assertEquals("", (string)$null->xyz);
    }

    /** @test */
    public function it_should_return_zero_for_an_integer()
    {
        $null = NullObject::create();
        $this->assertEquals(0, (int)$null->xyz);
        $this->assertEquals(0, (integer)$null->xyz);
    }

    /** @test */
    public function it_should_return_zero_for_a_float()
    {
        $null = NullObject::create();
        $this->assertEquals(0.0, (float)$null->xyz);
        $this->assertEquals(0.0, (real)$null->xyz);
    }

    /** @test */
    public function it_should_return_false_for_a_boolean()
    {
        $null = NullObject::create();
        $this->assertEquals(false, (bool)$null->xyz);
        $this->assertEquals(false, (boolean)$null->xyz);
    }

    /** @test */
    public function it_should_return_an_empty_array()
    {
        $null = NullObject::create();
        $this->assertEquals([], (array)$null->xyz);
    }

    /** @test */
    public function it_handles_both_methods_and_properties()
    {
        $null = NullObject::create();
        $this->assertEquals([], (array)$null->xyz);
        $this->assertEquals([], (array)$null->xyz());
    }
}

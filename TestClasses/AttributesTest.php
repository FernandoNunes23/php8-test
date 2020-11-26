<?php

#[ExampleAttribute]
class AttributesTest
{
    #[ExampleAttribute]
    public const FOO = 'foo';

    #[ExampleAttribute]
    public $x;

    #[ExampleAttribute]
    public function foo(#[ExampleAttribute] $bar)
    {
        return $bar->value;
    }
}
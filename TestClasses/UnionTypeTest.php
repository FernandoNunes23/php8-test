<?php


class UnionTypeTest
{
    public function foo(int|float $input): int|float
    {
        return $input;
    }
}
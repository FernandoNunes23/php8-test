<?php


class NamedArgumentsTest
{
    public function testReturnNamedArguments(string $a, string $b, string $c): string
    {
        return sprintf('Retorno váriaveis: a: %s, b: %s, c: %s', $a, $b ,$c);
    }
}
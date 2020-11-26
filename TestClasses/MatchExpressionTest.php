<?php


class MatchExpressionTest
{
    public function useMatchExpression(int $input): string
    {
        try {
            $result = match($input) {
                0 => "hello",
                1, 2, 3 => "world",
            };
        } catch (UnhandledMatchError) {
            return "Not Found";
        }

        return $result;
    }
}
<?php


class NullSafeOperatorTest
{
    public function returnDateTime(): \DateTime
    {
        return new \DateTime();
    }

    public function returnNullDateTime(): mixed
    {
        return null;
    }
}
<?php


class ConstructorPropertyPromotionTest
{
    /**
     * ConstructorPropertyPromotionTest constructor.
     * @param $name
     * @param $age
     * @param $status
     */
    public function __construct(
        public string $name,
        public int $age,
        private string $status
    ){}

    public function debugAttr(): string
    {
        return sprintf('Attr. Name: %s, Attr. age: %d, Attr. status: %s', $this->name, $this->age, $this->status);
    }
}
<?php
class ValueObject{
    private int $red;
    private int $green;
    private int $blue;
    public function __construct(int $red, int $green, int $blue)
    {
        $this->setRed($red);
        $this->setGreen($green);
        $this->setBlue($blue);
    }

    public function getRed(): int
    {
        return $this->red;
    }
    public function setRed($red):void
    {
        $this->validateColorValue($red);
        $this->red = $red;
    }
    public function getGreen(): int
    {
        return $this->green;
    }
    public function setGreen($green):void
    {
        $this->validateColorValue($green);
        $this->green = $green;
    }
    public function setBlue($blue): void
    {
        $this->validateColorValue($blue);
        $this->blue = $blue;
    }
    public function getBlue(): int
    {
        return $this->blue;
    }

    protected function validateColorValue($value): void
    {
        if (!is_numeric($value) || $value < 0 || $value > 255) {
            throw new InvalidArgumentException("Не валідний колір! Значення повинно бути в діапазоні від 0 до 255.");
        }
    }
    public function equals(ValueObject $object): bool
    {
        return $this->getRed() === $object->getRed()
            && $this->getGreen() === $object->getGreen()
            && $this->getBlue() === $object->getBlue();
    }
    static function random(): ValueObject
    {
        return new ValueObject(rand(0,255), rand(0,255), rand(0,255));
    }
     function mix(ValueObject $object): ValueObject
     {
        $green = ($this->getGreen() + $object->getGreen()) / 2;
        $blue = ($this->getBlue() + $object->getBlue()) / 2;
        $red = ($this->getRed() + $object->getRed()) /2;
        echo $green . " ". $blue . " " . $red . " " . "\n";
        return new ValueObject($green, $red, $blue);
    }
}

(new ValueObject(90,70,60))->mix(new ValueObject(20,80,90));
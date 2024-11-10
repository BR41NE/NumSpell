<?php

use PHPUnit\Framework\TestCase;
use Br41ne\NumSpell\NumberToWord;

class NumberToWordsTest extends TestCase
{
    private $numberToWords;

    protected function setUp(): void
    {
        $this->numberToWords = new NumberToWord();
    }

    public function testConvertZero()
    {
        $this->assertEquals('zero', $this->numberToWords->convert(0));
    }

    public function testConvertUnits()
    {
        $this->assertEquals('one', $this->numberToWords->convert(1));
        $this->assertEquals('five', $this->numberToWords->convert(5));
        $this->assertEquals('nine', $this->numberToWords->convert(9));
    }

    public function testConvertTeens()
    {
        $this->assertEquals('ten', $this->numberToWords->convert(10));
        $this->assertEquals('fourteen', $this->numberToWords->convert(14));
        $this->assertEquals('nineteen', $this->numberToWords->convert(19));
    }

    public function testConvertTens()
    {
        $this->assertEquals('twenty', $this->numberToWords->convert(20));
        $this->assertEquals('thirty', $this->numberToWords->convert(30));
        $this->assertEquals('ninety', $this->numberToWords->convert(90));
    }

    public function testConvertTensAndUnits()
    {
        $this->assertEquals('twenty-one', $this->numberToWords->convert(21));
        $this->assertEquals('thirty-five', $this->numberToWords->convert(35));
        $this->assertEquals('seventy-eight', $this->numberToWords->convert(78));
    }

    public function testConvertAboveNinety()
    {
        $this->assertEquals('ninety-nine', $this->numberToWords->convert(99));
        $this->assertEquals('one hundred', $this->numberToWords->convert(100));  // Extend logic for hundreds if needed
    }
}

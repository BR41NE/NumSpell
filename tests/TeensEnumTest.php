<?php

use PHPUnit\Framework\TestCase;
use Br41ne\NumSpell\Enums\Teens;

class TeensEnumTest extends TestCase
{
    public function testEnumValues()
    {
        // Check that each enum case returns the expected value
        $this->assertEquals('ten', Teens::TEN->value);
        $this->assertEquals('eleven', Teens::ELEVEN->value);
        $this->assertEquals('twelve', Teens::TWELVE->value);
        $this->assertEquals('thirteen', Teens::THIRTEEN->value);
        $this->assertEquals('fourteen', Teens::FOURTEEN->value);
        $this->assertEquals('fifteen', Teens::FIFTEEN->value);
        $this->assertEquals('sixteen', Teens::SIXTEEN->value);
        $this->assertEquals('seventeen', Teens::SEVENTEEN->value);
        $this->assertEquals('eighteen', Teens::EIGHTEEN->value);
        $this->assertEquals('nineteen', Teens::NINETEEN->value);
    }

    public function testGetAll()
    {
        // Test that getAll() returns the correct mapping
        $teens = Teens::getAll();

        $this->assertEquals('ten', $teens[10]);
        $this->assertEquals('eleven', $teens[11]);
        $this->assertEquals('twelve', $teens[12]);
        $this->assertEquals('thirteen', $teens[13]);
        $this->assertEquals('fourteen', $teens[14]);
        $this->assertEquals('fifteen', $teens[15]);
        $this->assertEquals('sixteen', $teens[16]);
        $this->assertEquals('seventeen', $teens[17]);
        $this->assertEquals('eighteen', $teens[18]);
        $this->assertEquals('nineteen', $teens[19]);
    }

    public function testInvalidIndex()
    {
        // Ensure that accessing an invalid index does not return a value
        $teens = Teens::getAll();
        $this->assertArrayNotHasKey(20, $teens);
        $this->assertArrayNotHasKey(9, $teens);
    }
}

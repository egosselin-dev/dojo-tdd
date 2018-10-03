<?php 

namespace DojoTest;

use Dojo\RomanNumeral;

class RomanNumeralTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var RomanNumeral
     */
    protected $romanNumeralInstance;
    
    public function setUp()
    {
        $this->romanNumeralInstance = new RomanNumeral();
    }
    
    public function testToRomanNumeralWillReturnAString()
    {
        $this->assertEquals("number: 1", $this->romanNumeralInstance->toRomanNumeral(1));
    }
}

<?php
namespace Tutorial;

use \Tutorial\lib\CalculatorLib;

class CalculatorLibTest extends \PHPUnit_Framework_TestCase {

    protected $calculator;

    public function setup()
    {
        $this->calculator = new CalculatorLib();
    }

    public function testadd()
    {
        $equals = $this->calculator->add(1, 2);
        $this->assertEquals(3, $equals);
    }

    public function testaddString()
    {
        $equals = $this->calculator->add("1", "2");
        $this->assertEquals(3, $equals);
    }

    public function testaddNull()
    {
        $equals = $this->calculator->add( NULL, NULL );
        $this->assertFalse($equals);
    }


}
 
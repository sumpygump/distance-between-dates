<?php

namespace Challenge018\Tests;

require __DIR__ . '../../../../src/Challenge018/Events.php';

use Challenge018\Events;

class EventsTest extends \PHPUnit_Framework_TestCase
{
    private $object;

    public function setUp()
    {
        $this->object = new Events();
    }

    public function testSame()
    {
        $result = $this->object->compareDates(201508, 201508);

        $this->assertEquals(0, $result);
    }

    public function testOneMonthDifferenceSameYear()
    {
        $result = $this->object->compareDates(201507, 201508);

        $this->assertEquals(1, $result);
    }

    public function testOneMonthDifferenceReverseSameYear()
    {
        $result = $this->object->compareDates(201508, 201507);

        $this->assertEquals(-1, $result);
    }

    public function testOneYearDifference()
    {
        $result = $this->object->compareDates(201408, 201508);

        $this->assertEquals(12, $result);
    }

    public function testOneMonthDifferenceSpanningTwoYears()
    {
        $result = $this->object->compareDates(201412, 201501);

        $this->assertEquals(1, $result);
    }

    public function testOneMonthDifferenceReverseSpanningTwoYears()
    {
        $result = $this->object->compareDates(201501, 201412);

        $this->assertEquals(-1, $result);
    }

    public function testMultiYearDifference()
    {
        $result = $this->object->compareDates(199506, 201503);

        $this->assertEquals(237, $result);
    }
}

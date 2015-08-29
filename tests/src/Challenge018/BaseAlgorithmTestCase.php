<?php
/**
 * Base Algorithm Test Case File
 *
 * @package Challenge018
 */

namespace Challenge018\Tests;

/**
 * BaseAlgorithmTestCase
 *
 * @package Challenge018
 * @author Jansen Price <jprice@nerdery.com>
 * @version $Id$
 */
class BaseAlgorithmTestCase extends \PHPUnit_Framework_TestCase
{
    /**
     * Object under test
     *
     * @var mixed
     */
    protected $object;

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



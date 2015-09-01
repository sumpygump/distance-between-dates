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

    /**
     * testEachMonthToEnsureNoRoundingErrors
     *
     * @dataProvider monthCycleProvider
     * @param mixed $a
     * @param mixed $b
     * @param mixed $expected
     * @return void
     */
    public function testEachMonthToEnsureNoRoundingErrors($a, $b, $expected)
    {
        $result = $this->object->compareDates($a, $b);
        $this->assertEquals($expected, $result);
    }

    public function monthCycleProvider()
    {
        return [
            [201501, 201502, 1],
            [201502, 201503, 1],
            [201503, 201504, 1],
            [201504, 201505, 1],
            [201505, 201506, 1],
            [201506, 201507, 1],
            [201507, 201508, 1],
            [201508, 201509, 1],
            [201509, 201510, 1],
            [201510, 201511, 1],
            [201511, 201512, 1],
            [201512, 201601, 1],
            [201501, 201503, 2],
            [201501, 201504, 3],
            [201501, 201505, 4],
            [201501, 201506, 5],
            [201501, 201507, 6],
            [201501, 201508, 7],
            [201501, 201509, 8],
            [201501, 201510, 9],
            [201501, 201511, 10],
            [201501, 201512, 11],
            [201501, 201601, 12],
        ];
    }
}



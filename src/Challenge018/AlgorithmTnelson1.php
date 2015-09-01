<?php
/**
 * Algorithm Tnelson1 Class file
 *
 * @package Challenge018
 */

namespace Challenge018;

/**
 * Algorithm Tnelson1
 *
 * This algorithm uses 
 *
 * @package Challenge018
 * @author Tony Nelson <tnelson@nerdery.com>
 * @version $Id$
 */
class AlgorithmTnelson1 implements InterfaceAlgorithm
{
    /**
     * Compare two dates in format YYYYMM as integers
     *
     * @param int $dateA Date A to compare
     * @param int $dateB Date B to compare
     * @return int Number of months
     */
    public function compareDates($b, $a)
    {
        return (int)(self::to_months($a) - self::to_months($b));
    }

    /**
     * @param int $a
     * @return int
     */
    public static function to_months($a)
    {
        return (floor($a / 100) * 12) + ($a % 100);
    }
}

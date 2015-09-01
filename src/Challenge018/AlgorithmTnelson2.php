<?php
/**
 * Algorithm Tnelson2 Class file
 *
 * @package Challenge018
 */

namespace Challenge018;

/**
 * Algorithm Tnelson2
 *
 * This algorithm uses 
 *
 * @package Challenge018
 * @author Tony Nelson <tnelson@nerdery.com>
 * @version $Id$
 */
class AlgorithmTnelson2 implements InterfaceAlgorithm
{
    /**
     * __construct
     *
     * @param int $start
     * @param int $end
     * @return void
     */
    public function __construct($start = 1990, $end = 2040)
    {
        $this->months = [];
        for ($i = $start; $i < $end; $i++) {
            $year = str_pad($i, 4, '0', STR_PAD_LEFT);
            for ($j = 0; $j < 100; $j++) {
                $month = str_pad($j, 2, '0', STR_PAD_LEFT);
                $this->months[$year.$month] = $i * 12 + $j;
            }
        }
    }

    /**
     * Compare two dates in format YYYYMM as integers
     *
     * @param int $dateA Date A to compare
     * @param int $dateB Date B to compare
     * @return int Number of months
     */
    public function compareDates($b, $a)
    {
        return $this->months[$a] - $this->months[$b];
    }
}

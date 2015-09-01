<?php
/**
 * Algorithm Jsexton Class file
 *
 * @package Challenge018
 */

namespace Challenge018;

/**
 * Algorithm Jsexton
 *
 * This algorithm uses 
 *
 * @package Challenge018
 * @author Joe Sexton <jsexton@nerdery.com>
 * @version $Id$
 */
class AlgorithmJsexton implements InterfaceAlgorithm
{
    /**
     * Compare two dates in format YYYYMM as integers
     *
     * @param int $dateA Date A to compare
     * @param int $dateB Date B to compare
     * @return int Number of months
     */
    public function compareDates($date2, $date1)
    {
        // Grab the last 2 digits
        $month1 = $date1 % 100;

        // Total months is found by taking the year with the remaining zeros after it,
        // divided by 100 to get the year then multiplied by 12 months(.12),
        // plus the month value
        $totalMonths1 = (($date1 - $month1) * .12) + $month1;

        // Rinse and repeat
        $month2 = $date2 % 100;
        $totalMonths2 = (($date2 - $month2) * .12) + $month2;

        return (int)($totalMonths1 - $totalMonths2);
    }
}


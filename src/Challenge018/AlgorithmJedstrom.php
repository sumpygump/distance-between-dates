<?php
/**
 * Algorithm Jedstrom Class file
 *
 * @package Challenge018
 */

namespace Challenge018;

/**
 * Algorithm Jedstrom
 *
 * This algorithm uses 
 *
 * @package Challenge018
 * @author Joe Sexton <jsexton@nerdery.com>
 * @version $Id$
 */
class AlgorithmJedstrom implements InterfaceAlgorithm
{
    /**
     * Compare two dates in format YYYYMM as integers
     *
     * @param int $dateOne Date A to compare
     * @param int $dateTwo Date B to compare
     * @return int Number of months
     */
    public function compareDates($dateTwo, $dateOne)
    {
        $dateOneMonth = $dateOne % 100;
        $dateOneYear = (int) ($dateOne / 100);

        $dateTwoMonth = $dateTwo % 100;
        $dateTwoYear = (int) ($dateTwo / 100);

        $months = (($dateOneYear - $dateTwoYear) * 12);
        $months += ($dateOneMonth - $dateTwoMonth);

        return $months;
    }
}


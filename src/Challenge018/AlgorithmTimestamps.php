<?php
/**
 * AlgorithmTimestamps class file
 *
 * @package Challenge018
 */

namespace Challenge018;

/**
 * Algorithm Timestamps
 *
 * This algorithm uses strtotime to convert the input dates into unix
 * timestamps and then uses date to parse the year and month values via
 * formatting
 *
 * @package Challenge018
 * @author Jansen Price <jprice@nerdery.com>
 * @version $Id$
 */
class AlgorithmTimestamps implements InterfaceAlgorithm
{
    /**
     * Compare two dates in format YYYYMM as integers
     *
     * @param int $dateA Date A to compare
     * @param int $dateB Date B to compare
     * @return int Number of months
     */
    public function compareDates($dateA, $dateB)
    {
        $timeA = strtotime($dateA . '01');
        $timeB = strtotime($dateB . '01');

        return ((date('Y', $timeB) - date('Y', $timeA)) * 12) + (date('m', $timeB) - date('m', $timeA));
    }
}

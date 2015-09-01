<?php
/**
 * Algorithm Mseemann Class file
 *
 * @package Challenge018
 */

namespace Challenge018;

/**
 * Algorithm Mseemann
 *
 * This algorithm uses 
 *
 * @package Challenge018
 * @author Mark Seemann <mseemann@nerdery.com>
 * @version $Id$
 */
class AlgorithmMseemann implements InterfaceAlgorithm
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
        return 12*((int)($a/100)-(int)($b/100))+(($a%100)-($b%100));
    }
}



<?php
/**
 * Algorithm Nmallare Class file
 *
 * @package Challenge018
 */

namespace Challenge018;

/**
 * Algorithm Nmallare
 *
 * This algorithm uses 
 *
 * @package Challenge018
 * @author Nick Mallare <nmallare@nerdery.com>
 * @version $Id$
 */
class AlgorithmNmallare implements InterfaceAlgorithm
{
    /**
     * Compare two dates in format YYYYMM as integers
     *
     * @param int $dateA Date A to compare
     * @param int $dateB Date B to compare
     * @return int Number of months
     */
    public function compareDates($inputB, $inputA)
    {
        return (substr($inputA, 0, 4) * 12 + substr($inputA, 4, 2)) - (substr($inputB, 0, 4) * 12 + substr($inputB, 4, 2));
    }
}

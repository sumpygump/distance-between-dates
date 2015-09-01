<?php
/**
 * Algorithm Cfein Split Class file
 *
 * @package Challenge018
 */

namespace Challenge018;

/**
 * Algorithm Cfein Split
 *
 * This algorithm uses str_split()
 *
 * @package Challenge018
 * @author Colin Fein <cfein@nerdery.com>
 * @version $Id$
 */
class AlgorithmCfeinSplit implements InterfaceAlgorithm
{
    /**
     * Compare two dates in format YYYYMM as integers
     *
     * @param int $dateA Date A to compare
     * @param int $dateB Date B to compare
     * @return int Number of months
     */
    public function compareDates($from, $to)
    {
        $to = str_split(str_pad($to, 6, '0', STR_PAD_LEFT), 4);
        $from = str_split(str_pad($from, 6, '0', STR_PAD_LEFT), 4);
        return ($to[0] - $from[0]) * 12 + $to[1] - $from[1];
    }
}

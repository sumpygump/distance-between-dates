<?php
/**
 * Algorithm Cfein Mod Class file
 *
 * @package Challenge018
 */

namespace Challenge018;

/**
 * Algorithm Cfein Mod
 *
 * This algorithm uses modulus
 *
 * @package Challenge018
 * @author Colin Fein <cfein@nerdery.com>
 * @version $Id$
 */
class AlgorithmCfeinMod implements InterfaceAlgorithm
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
        $toDays = $to % 100;
        $fromDays = $from % 100;
        //multiply year difference by 12 to get months, and divide by 100 (ex: 201500 - 201400)
        return (($to - $toDays) - ($from - $fromDays)) * 0.12 + $toDays - $fromDays;
    }
}

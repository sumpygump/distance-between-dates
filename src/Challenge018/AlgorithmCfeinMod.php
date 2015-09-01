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
        // Second version of code sent by cfein for this algorithm
        return (($to - ($to % 100)) - ($from - ($from % 100))) * 0.12 + ($to % 100) - ($from % 100);
    }
}

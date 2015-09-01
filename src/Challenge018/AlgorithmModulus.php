<?php
/**
 * AlgorithmModulus Class file
 *
 * @package Challenge018
 */

namespace Challenge018;

/**
 * Algorithm Modulus
 *
 * This algorithm uses modulus and division to separate out the year and month
 * from the input values
 *
 * @package Challenge018
 * @author Jansen Price <jprice@nerdery.com>
 * @version $Id$
 */
class AlgorithmModulus implements InterfaceAlgorithm
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
        // Dates equal; 0 months
        if ($dateA === $dateB) {
            return 0;
        }

        // This strips off the year
        $yearA = (int)($dateA / 100);
        $yearB = (int)($dateB / 100);

        // If within same year, just subtract
        if ($yearA === $yearB) {
            return $dateB - $dateA;
        }

        // This strips off the month
        $monthA = $dateA % 100;
        $monthB = $dateB % 100;

        // Different years: subtract years and months separately
        return (($yearB - $yearA) * 12) + ($monthB - $monthA);
    }
}


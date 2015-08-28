<?php

namespace Challenge018;

/**
 * Events
 *
 * @package Challenge018
 * @author Name <address@domain>
 * @version $Id$
 */
class Events
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

        $yearA = (int) substr($dateA, 0, 4);
        $yearB = (int) substr($dateB, 0, 4);

        // If within same year, just subtract months
        if ($yearA == $yearB) {
            return $dateB - $dateA;
        }

        $monthA = (int) substr($dateA, 4, 2);
        $monthB = (int) substr($dateB, 4, 2);

        // Different years, subtract years and months separately
        return (($yearB - $yearA) * 12) + ($monthB - $monthA);
    }
}

<?php
/**
 * Interface for Algorithm
 *
 * @package Challenge018
 */

namespace Challenge018;

/**
 * InterfaceAlgorithm
 *
 * @package Challenge018
 * @author Jansen Price <jprice@nerdery.com>
 * @version $Id$
 */
interface InterfaceAlgorithm
{
    /**
     * Compare two dates as integers in format YYYYMM
     *
     * @param int $dateA
     * @param int $dateB
     * @return int Number of months difference between dates
     */
    public function compareDates($dateA, $dateB);
}

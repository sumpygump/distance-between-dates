<?php
/**
 * Tests for AlgorithmTimestamps
 *
 * @package Challenge018
 */

namespace Challenge018\Tests;

require_once __DIR__ . '/BaseAlgorithmTestCase.php';
require_once __DIR__ . '/../../../src/Challenge018/AlgorithmTimestamps.php';

use Challenge018\AlgorithmTimestamps;

/**
 * AlgorithmTimestampsTest
 *
 * @package Challenge018
 * @author Jansen Price <jprice@nerdery.com>
 * @version $Id$
 */
class AlgorithmTimestampsTest extends BaseAlgorithmTestCase
{
    /**
     * setUp
     *
     * @return void
     */
    public function setUp()
    {
        $this->object = new AlgorithmTimestamps();
    }
}

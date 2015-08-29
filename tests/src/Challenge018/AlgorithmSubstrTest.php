<?php
/**
 * Tests for AlgorithmSubstr
 *
 * @package Challenge018
 */

namespace Challenge018\Tests;

require_once __DIR__ . '/BaseAlgorithmTestCase.php';
require_once __DIR__ . '/../../../src/Challenge018/AlgorithmSubstr.php';

use Challenge018\AlgorithmSubstr;

/**
 * AlgorithmSubstrTest
 *
 * @package Challenge018
 * @author Jansen Price <jprice@nerdery.com>
 * @version $Id$
 */
class AlgorithmSubstrTest extends BaseAlgorithmTestCase
{
    /**
     * setUp
     *
     * @return void
     */
    public function setUp()
    {
        $this->object = new AlgorithmSubstr();
    }
}

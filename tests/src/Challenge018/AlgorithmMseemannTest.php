<?php
/**
 * Tests for AlgorithmModulus
 *
 * @package Challenge018
 */

namespace Challenge018\Tests;

require_once __DIR__ . '/BaseAlgorithmTestCase.php';
require_once __DIR__ . '/../../../src/Challenge018/AlgorithmMseemann.php';

use Challenge018\AlgorithmMseemann;

/**
 * AlgorithmModulusTest
 *
 * @package Challenge018
 * @author Jansen Price <jprice@nerdery.com>
 * @version $Id$
 */
class AlgorithmMseemannTest extends BaseAlgorithmTestCase
{
    /**
     * Set up
     *
     * @return void
     */
    public function setUp()
    {
        $this->object = new AlgorithmMseemann();
    }
}


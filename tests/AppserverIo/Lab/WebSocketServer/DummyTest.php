<?php

/**
 * AppserverIo\Lab\WebSocketServer\DummyTest
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * PHP version 5
 *
 * @author    Tim Wagner <tw@techdivision.com>
 * @copyright 2015 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io-lab/websocket-server
 * @link      http://www.appserver.io
 */

namespace AppserverIo\Lab\WebSocketServer;

/**
 * Dummy test implementation.
 *
 * @author    Tim Wagner <tw@techdivision.com>
 * @copyright 2015 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io-lab/websocket-server
 * @link      http://www.appserver.io
 */
class DummyTest extends \PHPUnit_Framework_TestCase
{

    /**
     * This is a dummy test implementation.
     *
     * @return void
     */
    public function testDummy()
    {
        $this->assertTrue(true);
    }
}
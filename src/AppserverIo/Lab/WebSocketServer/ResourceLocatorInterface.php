<?php

/**
 * AppserverIo\Lab\WebSocketServer\ResourceLocatorInterface
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * PHP version 5
 *
 * @author    Tim Wagner <tw@appserver.io>
 * @copyright 2015 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io-lab/websocket-server
 * @link      http://www.appserver.io
 */

namespace AppserverIo\Lab\WebSocketServer;

use AppserverIo\Lab\WebSocketProtocol\RequestInterface;
use AppserverIo\Lab\WebSocketProtocol\HandlerContextInterface;

/**
 * Interface for the resource locator instances.
 *
 * @author    Tim Wagner <tw@appserver.io>
 * @copyright 2015 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io-lab/websocket-server
 * @link      http://www.appserver.io
 */
interface ResourceLocatorInterface
{

    /**
     * Tries to locate the handler that handles the request and returns the instance if one can be found.
     *
     * @param \AppserverIo\Lab\WebSocketProtocol\HandlerContextInterface $handlerManager The handler manager
     * @param \AppserverIo\Lab\WebSocketProtocol\RequestInterface        $request        The request instance
     *
     * @return \Ratchet\MessageComponentInterface The handler that maps the request instance
     */
    public function locate(HandlerContextInterface $handlerManager, RequestInterface $request);
}

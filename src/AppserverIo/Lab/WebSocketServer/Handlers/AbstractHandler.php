<?php

/**
 * AppserverIo\Lab\WebSocketServer\Handlers\AbstractHandler
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

namespace AppserverIo\Lab\WebSocketServer\Handlers;

use AppserverIo\Lab\WebSocketProtocol\RequestInterface;
use AppserverIo\Lab\WebSocketProtocol\HandlerInterface;
use AppserverIo\Lab\WebSocketProtocol\HandlerConfigInterface;

/**
 * Abstract base class for all handlers.
 *
 * @author    Tim Wagner <tw@appserver.io>
 * @copyright 2015 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io-lab/websocket-server
 * @link      http://www.appserver.io
 */
abstract class AbstractHandler implements HandlerInterface
{

    /**
     * The handler configuration instance.
     *
     * @var \AppserverIo\Lab\WebSocketProtocol\HandlerConfigInterface
     */
    protected $config;

    /**
     * Current request on a handled connection
     *
     * @var \AppserverIo\Lab\WebSocketProtocol\RequestInterface $request
     */
    protected $request;

    /**
     * Initializes the handler with the passed configuration.
     *
     * @param \AppserverIo\Lab\WebSocketProtocol\HandlerConfigInterface $config The configuration to initialize the handler with
     *
     * @return void
     * @throws \AppserverIo\Lab\WebSocketProtocol\HandlerException Is thrown if the configuration has errors
     */
    public function init(HandlerConfigInterface $config)
    {
        $this->config = $config;
    }

    /**
     * Injects the request instance when the connection has been created.
     *
     * @param \AppserverIo\Lab\WebSocketProtocol\RequestInterface $request The request instance
     *
     * @return void
     */
    public function injectRequest(RequestInterface $request)
    {
        $this->request = $request;
    }

    /**
     * Return's the servlet's configuration.
     *
     * @return \AppserverIo\Lab\WebSocketProtocol\HandlerConfigInterface The handler's configuration
     */
    public function getHandlerConfig()
    {
        return $this->config;
    }

    /**
     * Returns the handler context instance
     *
     * @return \AppserverIo\Lab\WebSocketProtocol\HandlerContextInterface The handler context instance
     */
    public function getHandlerContext()
    {
        return $this->getHandlerConfig()->getHandlerContext();
    }

    /**
     * Returns the request instance.
     *
     * @return \AppserverIo\Lab\WebSocketProtocol\RequestInterface The request instance
     */
    public function getRequest()
    {
        return $this->request;
    }
}

<?php
/**
 * Created by PhpStorm.
 * User: Claudio
 * Date: 04/10/2016
 * Time: 18:52
 */

namespace Progama\View\Helper;


use Interop\Container\ContainerInterface;
use Interop\Container\Exception\ContainerException;
use Zend\ServiceManager\Exception\ServiceNotCreatedException;
use Zend\ServiceManager\Exception\ServiceNotFoundException;
use Zend\ServiceManager\Factory\FactoryInterface;

class ProgamaHelperFactory implements FactoryInterface {

    /**
     * Create an object
     *
     * @param  ContainerInterface $container
     * @param  string $requestedName
     * @param  null|array $options
     * @return object
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
       return new ProgamaHelper($container);
    }
}
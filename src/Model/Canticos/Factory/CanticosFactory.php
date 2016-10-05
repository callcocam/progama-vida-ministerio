<?php
/**
 * @license © 2005 - 2016 by Zend Technologies Ltd. All rights reserved.
 */


namespace Progama\Model\Canticos\Factory;

use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;
use Progama\Model\Canticos\Canticos;

/**
 * SIGA-Smart
 *
 * Esta class foi gerada via Zend\Code\Generator.
 */
class CanticosFactory implements FactoryInterface
{

    /**
     * __invoke Factory Model
     *
     * @return __invoke
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        // Configurações iniciais do Factory Model
        return new Canticos();
    }


}


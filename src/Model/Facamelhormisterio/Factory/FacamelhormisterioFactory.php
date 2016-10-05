<?php
/**
 * @license © 2005 - 2016 by Zend Technologies Ltd. All rights reserved.
 */


namespace Progama\Model\Facamelhormisterio\Factory;

use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;
use Progama\Model\Facamelhormisterio\Facamelhormisterio;

/**
 * SIGA-Smart
 *
 * Esta class foi gerada via Zend\Code\Generator.
 */
class FacamelhormisterioFactory implements FactoryInterface
{

    /**
     * __invoke Factory Model
     *
     * @return __invoke
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        // Configurações iniciais do Factory Model
        return new Facamelhormisterio();
    }


}


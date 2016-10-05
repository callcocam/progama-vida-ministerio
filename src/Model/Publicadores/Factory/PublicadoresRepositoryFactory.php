<?php
/**
 * @license © 2005 - 2016 by Zend Technologies Ltd. All rights reserved.
 */


namespace Progama\Model\Publicadores\Factory;

use Base\Model\AbstractFactory;
use Zend\ServiceManager\Factory\FactoryInterface;
use Interop\Container\ContainerInterface;
use Progama\Model\Publicadores\PublicadoresRepository;
use Progama\Model\Publicadores\Publicadores;

/**
 * SIGA-Smart
 *
 * Esta class foi gerada via Zend\Code\Generator.
 */
class PublicadoresRepositoryFactory extends AbstractFactory implements FactoryInterface
{

    /**
     * __invoke Factory Model
     *
     * @return __invoke
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        // Configurações iniciais do Factory Table
        $this->model=Publicadores::class;
        $this->table="bs_publicadores";
        return new PublicadoresRepository($this->getTablegateway($container));
    }


}


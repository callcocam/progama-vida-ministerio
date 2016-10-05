<?php
/**
 * @license © 2005 - 2016 by Zend Technologies Ltd. All rights reserved.
 */


namespace Progama\Model\Vidacrista\Factory;

use Base\Model\AbstractFactory;
use Zend\ServiceManager\Factory\FactoryInterface;
use Interop\Container\ContainerInterface;
use Progama\Model\Vidacrista\VidacristaRepository;
use Progama\Model\Vidacrista\Vidacrista;

/**
 * SIGA-Smart
 *
 * Esta class foi gerada via Zend\Code\Generator.
 */
class VidacristaRepositoryFactory extends AbstractFactory implements FactoryInterface
{

    /**
     * __invoke Factory Model
     *
     * @return __invoke
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        // Configurações iniciais do Factory Table
        $this->model=Vidacrista::class;
        $this->table="bs_vida_crista";
        return new VidacristaRepository($this->getTablegateway($container));
    }


}


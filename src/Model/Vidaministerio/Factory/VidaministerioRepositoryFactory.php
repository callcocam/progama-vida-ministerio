<?php
/**
 * @license © 2005 - 2016 by Zend Technologies Ltd. All rights reserved.
 */


namespace Progama\Model\Vidaministerio\Factory;

use Base\Model\AbstractFactory;
use Zend\ServiceManager\Factory\FactoryInterface;
use Interop\Container\ContainerInterface;
use Progama\Model\Vidaministerio\VidaministerioRepository;
use Progama\Model\Vidaministerio\Vidaministerio;

/**
 * SIGA-Smart
 *
 * Esta class foi gerada via Zend\Code\Generator.
 */
class VidaministerioRepositoryFactory extends AbstractFactory implements FactoryInterface
{

    /**
     * __invoke Factory Model
     *
     * @return __invoke
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        // Configurações iniciais do Factory Table
        $this->model=Vidaministerio::class;
        $this->table="bs_vida_ministerio";
        return new VidaministerioRepository($this->getTablegateway($container));
    }


}


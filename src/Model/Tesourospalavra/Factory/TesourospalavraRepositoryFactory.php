<?php
/**
 * @license © 2005 - 2016 by Zend Technologies Ltd. All rights reserved.
 */


namespace Progama\Model\Tesourospalavra\Factory;

use Base\Model\AbstractFactory;
use Zend\ServiceManager\Factory\FactoryInterface;
use Interop\Container\ContainerInterface;
use Progama\Model\Tesourospalavra\TesourospalavraRepository;
use Progama\Model\Tesourospalavra\Tesourospalavra;

/**
 * SIGA-Smart
 *
 * Esta class foi gerada via Zend\Code\Generator.
 */
class TesourospalavraRepositoryFactory extends AbstractFactory implements FactoryInterface
{

    /**
     * __invoke Factory Model
     *
     * @return __invoke
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        // Configurações iniciais do Factory Table
        $this->model=Tesourospalavra::class;
        $this->table="bs_tesouros_palavra";
        return new TesourospalavraRepository($this->getTablegateway($container));
    }


}


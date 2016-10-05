<?php
/**
 * @license © 2005 - 2016 by Zend Technologies Ltd. All rights reserved.
 */


namespace Progama\Model\Facamelhormisterio\Factory;

use Base\Model\AbstractFactory;
use Zend\ServiceManager\Factory\FactoryInterface;
use Interop\Container\ContainerInterface;
use Progama\Model\Facamelhormisterio\FacamelhormisterioRepository;
use Progama\Model\Facamelhormisterio\Facamelhormisterio;

/**
 * SIGA-Smart
 *
 * Esta class foi gerada via Zend\Code\Generator.
 */
class FacamelhormisterioRepositoryFactory extends AbstractFactory implements FactoryInterface
{

    /**
     * __invoke Factory Model
     *
     * @return __invoke
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        // Configurações iniciais do Factory Table
        $this->model=Facamelhormisterio::class;
        $this->table="bs_faca_melhor_misterio";
        return new FacamelhormisterioRepository($this->getTablegateway($container));
    }


}


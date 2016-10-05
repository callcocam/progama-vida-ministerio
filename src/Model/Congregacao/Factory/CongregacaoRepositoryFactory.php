<?php
/**
 * @license © 2005 - 2016 by Zend Technologies Ltd. All rights reserved.
 */


namespace Progama\Model\Congregacao\Factory;

use Base\Model\AbstractFactory;
use Zend\ServiceManager\Factory\FactoryInterface;
use Interop\Container\ContainerInterface;
use Progama\Model\Congregacao\CongregacaoRepository;
use Progama\Model\Congregacao\Congregacao;

/**
 * SIGA-Smart
 *
 * Esta class foi gerada via Zend\Code\Generator.
 */
class CongregacaoRepositoryFactory extends AbstractFactory implements FactoryInterface
{

    /**
     * __invoke Factory Model
     *
     * @return __invoke
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        // Configurações iniciais do Factory Table
        $this->model=Congregacao::class;
        $this->table="bs_cogregacao";
        return new CongregacaoRepository($this->getTablegateway($container));
    }


}


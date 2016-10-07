<?php
/**
 * @license © 2005 - 2016 by Zend Technologies Ltd. All rights reserved.
 */


namespace Progama\Controller;

use Base\Controller\AbstractController;
use Interop\Container\ContainerInterface;
use Progama\Form\IndicadoresFilter;
use Progama\Form\IndicadoresForm;
use Progama\Model\Indicadores\Indicadores;
use Progama\Model\Indicadores\IndicadoresRepository;

/**
 * SIGA-Smart
 *
 * Esta class foi gerada via Zend\Code\Generator.
 */
class IndicadoresController extends AbstractController
{

    /**
     * __construct Factory Model
     *
     * @return __construct
     */
    public function __construct(ContainerInterface $containerInterface)
    {
        // Configurações iniciais do Controller
        $this->containerInterface=$containerInterface;
        $this->table=IndicadoresRepository::class;
        $this->model=Indicadores::class;
        $this->form=IndicadoresForm::class;
        $this->filter=IndicadoresFilter::class;
        $this->route="progama";
        $this->controller="indicadores";
    }


}


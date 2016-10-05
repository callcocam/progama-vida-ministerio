<?php
/**
 * @license © 2005 - 2016 by Zend Technologies Ltd. All rights reserved.
 */


namespace Progama\Controller;

use Base\Controller\AbstractController;
use Interop\Container\ContainerInterface;
use Progama\Form\CanticosFilter;
use Progama\Form\CanticosForm;
use Progama\Model\Canticos\Canticos;
use Progama\Model\Canticos\CanticosRepository;

/**
 * SIGA-Smart
 *
 * Esta class foi gerada via Zend\Code\Generator.
 */
class CanticosController extends AbstractController
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
        $this->table=CanticosRepository::class;
        $this->model=Canticos::class;
        $this->form=CanticosForm::class;
        $this->filter=CanticosFilter::class;
        $this->route="progama";
        $this->controller="canticos";
    }


}


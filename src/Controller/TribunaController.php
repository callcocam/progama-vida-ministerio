<?php
/**
 * @license © 2005 - 2016 by Zend Technologies Ltd. All rights reserved.
 */


namespace Progama\Controller;

use Base\Controller\AbstractController;
use Interop\Container\ContainerInterface;
use Progama\Form\TribunaFilter;
use Progama\Form\TribunaForm;
use Progama\Model\Tribuna\Tribuna;
use Progama\Model\Tribuna\TribunaRepository;

/**
 * SIGA-Smart
 *
 * Esta class foi gerada via Zend\Code\Generator.
 */
class TribunaController extends AbstractController
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
        $this->table=TribunaRepository::class;
        $this->model=Tribuna::class;
        $this->form=TribunaForm::class;
        $this->filter=TribunaFilter::class;
        $this->route="progama";
        $this->controller="tribuna";
    }


}


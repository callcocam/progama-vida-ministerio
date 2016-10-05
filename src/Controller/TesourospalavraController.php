<?php
/**
 * @license © 2005 - 2016 by Zend Technologies Ltd. All rights reserved.
 */


namespace Progama\Controller;

use Base\Controller\AbstractController;
use Interop\Container\ContainerInterface;
use Progama\Form\TesourospalavraFilter;
use Progama\Form\TesourospalavraForm;
use Progama\Model\Tesourospalavra\Tesourospalavra;
use Progama\Model\Tesourospalavra\TesourospalavraRepository;

/**
 * SIGA-Smart
 *
 * Esta class foi gerada via Zend\Code\Generator.
 */
class TesourospalavraController extends AbstractController
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
        $this->table=TesourospalavraRepository::class;
        $this->model=Tesourospalavra::class;
        $this->form=TesourospalavraForm::class;
        $this->filter=TesourospalavraFilter::class;
        $this->route="progama";
        $this->controller="tesourospalavra";
    }


}


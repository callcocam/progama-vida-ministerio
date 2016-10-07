<?php
/**
 * @license © 2005 - 2016 by Zend Technologies Ltd. All rights reserved.
 */


namespace Progama\Controller;

use Base\Controller\AbstractController;
use Interop\Container\ContainerInterface;
use Progama\Form\SomFilter;
use Progama\Form\SomForm;
use Progama\Model\Som\Som;
use Progama\Model\Som\SomRepository;

/**
 * SIGA-Smart
 *
 * Esta class foi gerada via Zend\Code\Generator.
 */
class SomController extends AbstractController
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
        $this->table=SomRepository::class;
        $this->model=Som::class;
        $this->form=SomForm::class;
        $this->filter=SomFilter::class;
        $this->route="progama";
        $this->controller="som";
    }


}


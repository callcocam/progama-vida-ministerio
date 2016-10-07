<?php
/**
 * @license © 2005 - 2016 by Zend Technologies Ltd. All rights reserved.
 */


namespace Progama\Controller;

use Base\Controller\AbstractController;
use Interop\Container\ContainerInterface;
use Progama\Form\PresidenteFilter;
use Progama\Form\PresidenteForm;
use Progama\Model\Presidente\Presidente;
use Progama\Model\Presidente\PresidenteRepository;

/**
 * SIGA-Smart
 *
 * Esta class foi gerada via Zend\Code\Generator.
 */
class PresidenteController extends AbstractController
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
        $this->table=PresidenteRepository::class;
        $this->model=Presidente::class;
        $this->form=PresidenteForm::class;
        $this->filter=PresidenteFilter::class;
        $this->route="progama";
        $this->controller="presidente";
    }


}


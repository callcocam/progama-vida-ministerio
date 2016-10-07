<?php
/**
 * @license © 2005 - 2016 by Zend Technologies Ltd. All rights reserved.
 */


namespace Progama\Controller;

use Base\Controller\AbstractController;
use Interop\Container\ContainerInterface;
use Progama\Form\LeitorlivroFilter;
use Progama\Form\LeitorlivroForm;
use Progama\Model\Leitorlivro\Leitorlivro;
use Progama\Model\Leitorlivro\LeitorlivroRepository;

/**
 * SIGA-Smart
 *
 * Esta class foi gerada via Zend\Code\Generator.
 */
class LeitorlivroController extends AbstractController
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
        $this->table=LeitorlivroRepository::class;
        $this->model=Leitorlivro::class;
        $this->form=LeitorlivroForm::class;
        $this->filter=LeitorlivroFilter::class;
        $this->route="progama";
        $this->controller="leitorlivro";
    }


}


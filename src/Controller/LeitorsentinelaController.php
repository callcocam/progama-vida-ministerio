<?php
/**
 * @license © 2005 - 2016 by Zend Technologies Ltd. All rights reserved.
 */


namespace Progama\Controller;

use Base\Controller\AbstractController;
use Interop\Container\ContainerInterface;
use Progama\Form\LeitorsentinelaFilter;
use Progama\Form\LeitorsentinelaForm;
use Progama\Model\Leitorsentinela\Leitorsentinela;
use Progama\Model\Leitorsentinela\LeitorsentinelaRepository;

/**
 * SIGA-Smart
 *
 * Esta class foi gerada via Zend\Code\Generator.
 */
class LeitorsentinelaController extends AbstractController
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
        $this->table=LeitorsentinelaRepository::class;
        $this->model=Leitorsentinela::class;
        $this->form=LeitorsentinelaForm::class;
        $this->filter=LeitorsentinelaFilter::class;
        $this->route="progama";
        $this->controller="leitorsentinela";
    }


}


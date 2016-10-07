<?php
/**
 * @license © 2005 - 2016 by Zend Technologies Ltd. All rights reserved.
 */


namespace Progama\Controller;

use Base\Controller\AbstractController;
use Interop\Container\ContainerInterface;
use Progama\Form\ReuniaopublicaFilter;
use Progama\Form\ReuniaopublicaForm;
use Progama\Model\Reuniaopublica\Reuniaopublica;
use Progama\Model\Reuniaopublica\ReuniaopublicaRepository;

/**
 * SIGA-Smart
 *
 * Esta class foi gerada via Zend\Code\Generator.
 */
class ReuniaopublicaController extends AbstractController
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
        $this->table=ReuniaopublicaRepository::class;
        $this->model=Reuniaopublica::class;
        $this->form=ReuniaopublicaForm::class;
        $this->filter=ReuniaopublicaFilter::class;
        $this->route="progama";
        $this->controller="reuniaopublica";
    }


}


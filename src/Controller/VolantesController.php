<?php
/**
 * @license © 2005 - 2016 by Zend Technologies Ltd. All rights reserved.
 */


namespace Progama\Controller;

use Base\Controller\AbstractController;
use Interop\Container\ContainerInterface;
use Progama\Form\VolantesFilter;
use Progama\Form\VolantesForm;
use Progama\Model\Volantes\Volantes;
use Progama\Model\Volantes\VolantesRepository;

/**
 * SIGA-Smart
 *
 * Esta class foi gerada via Zend\Code\Generator.
 */
class VolantesController extends AbstractController
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
        $this->table=VolantesRepository::class;
        $this->model=Volantes::class;
        $this->form=VolantesForm::class;
        $this->filter=VolantesFilter::class;
        $this->route="progama";
        $this->controller="volantes";
    }


}


<?php
/**
 * @license © 2005 - 2016 by Zend Technologies Ltd. All rights reserved.
 */


namespace Progama\Controller;

use Base\Controller\AbstractController;
use Interop\Container\ContainerInterface;
use Progama\Form\VidacristaFilter;
use Progama\Form\VidacristaForm;
use Progama\Model\Vidacrista\Vidacrista;
use Progama\Model\Vidacrista\VidacristaRepository;

/**
 * SIGA-Smart
 *
 * Esta class foi gerada via Zend\Code\Generator.
 */
class VidacristaController extends AbstractController
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
        $this->table=VidacristaRepository::class;
        $this->model=Vidacrista::class;
        $this->form=VidacristaForm::class;
        $this->filter=VidacristaFilter::class;
        $this->route="progama";
        $this->controller="vidacrista";
    }


}


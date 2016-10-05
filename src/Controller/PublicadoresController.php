<?php
/**
 * @license © 2005 - 2016 by Zend Technologies Ltd. All rights reserved.
 */


namespace Progama\Controller;

use Base\Controller\AbstractController;
use Interop\Container\ContainerInterface;
use Progama\Form\PublicadoresFilter;
use Progama\Form\PublicadoresForm;
use Progama\Model\Publicadores\Publicadores;
use Progama\Model\Publicadores\PublicadoresRepository;

/**
 * SIGA-Smart
 *
 * Esta class foi gerada via Zend\Code\Generator.
 */
class PublicadoresController extends AbstractController
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
        $this->table=PublicadoresRepository::class;
        $this->model=Publicadores::class;
        $this->form=PublicadoresForm::class;
        $this->filter=PublicadoresFilter::class;
        $this->route="progama";
        $this->controller="publicadores";
    }


}


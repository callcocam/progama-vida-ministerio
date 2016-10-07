<?php
/**
 * @license © 2005 - 2016 by Zend Technologies Ltd. All rights reserved.
 */


namespace Progama\Controller;

use Base\Controller\AbstractController;
use Interop\Container\ContainerInterface;
use Progama\Form\OradoresFilter;
use Progama\Form\OradoresForm;
use Progama\Model\Oradores\Oradores;
use Progama\Model\Oradores\OradoresRepository;

/**
 * SIGA-Smart
 *
 * Esta class foi gerada via Zend\Code\Generator.
 */
class OradoresController extends AbstractController
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
        $this->table=OradoresRepository::class;
        $this->model=Oradores::class;
        $this->form=OradoresForm::class;
        $this->filter=OradoresFilter::class;
        $this->route="progama";
        $this->controller="oradores";
    }


}


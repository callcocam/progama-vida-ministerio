<?php
/**
 * @license © 2005 - 2016 by Zend Technologies Ltd. All rights reserved.
 */


namespace Progama\Controller;

use Base\Controller\AbstractController;
use Interop\Container\ContainerInterface;
use Progama\Form\DiscursosFilter;
use Progama\Form\DiscursosForm;
use Progama\Model\Discursos\Discursos;
use Progama\Model\Discursos\DiscursosRepository;

/**
 * SIGA-Smart
 *
 * Esta class foi gerada via Zend\Code\Generator.
 */
class DiscursosController extends AbstractController
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
        $this->table=DiscursosRepository::class;
        $this->model=Discursos::class;
        $this->form=DiscursosForm::class;
        $this->filter=DiscursosFilter::class;
        $this->route="progama";
        $this->controller="discursos";
    }


}


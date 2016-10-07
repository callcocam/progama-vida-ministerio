<?php
/**
 * @license © 2005 - 2016 by Zend Technologies Ltd. All rights reserved.
 */


namespace Progama\Controller;

use Base\Controller\AbstractController;
use Interop\Container\ContainerInterface;
use Progama\Form\ReuniaoFilter;
use Progama\Form\ReuniaoForm;
use Progama\Model\Reuniao\Reuniao;
use Progama\Model\Reuniao\ReuniaoRepository;

/**
 * SIGA-Smart
 *
 * Esta class foi gerada via Zend\Code\Generator.
 */
class ReuniaoController extends AbstractController
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
        $this->table=ReuniaoRepository::class;
        $this->model=Reuniao::class;
        $this->form=ReuniaoForm::class;
        $this->filter=ReuniaoFilter::class;
        $this->route="progama";
        $this->controller="reuniao";
    }


}


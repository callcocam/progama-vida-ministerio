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
use Zend\View\Model\JsonModel;

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
     * @param ContainerInterface $containerInterface
     * @return \Progama\Controller\PublicadoresController
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

    public function findAction(){
        $this->getTable()->find($this->params()->fromRoute('id',0),false);
        return new JsonModel($this->getTable()->getData()->toArray());
    }


}


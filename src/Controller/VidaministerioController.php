<?php
/**
 * @license © 2005 - 2016 by Zend Technologies Ltd. All rights reserved.
 */


namespace Progama\Controller;

use Base\Controller\AbstractController;
use Interop\Container\ContainerInterface;
use Progama\Form\VidaministerioFilter;
use Progama\Form\VidaministerioForm;
use Progama\Model\Vidaministerio\Vidaministerio;
use Progama\Model\Vidaministerio\VidaministerioRepository;
use Zend\View\Model\JsonModel;

/**
 * SIGA-Smart
 *
 * Esta class foi gerada via Zend\Code\Generator.
 */
class VidaministerioController extends AbstractController
{

    /**
     * __construct Factory Model
     *
     * @param ContainerInterface $containerInterface
     * @return \Progama\Controller\VidaministerioController
     */
    public function __construct(ContainerInterface $containerInterface)
    {
        // Configurações iniciais do Controller
        $this->containerInterface=$containerInterface;
        $this->table=VidaministerioRepository::class;
        $this->model=Vidaministerio::class;
        $this->form=VidaministerioForm::class;
        $this->filter=VidaministerioFilter::class;
        $this->route="progama";
        $this->controller="vidaministerio";
        $this->action_print="vidaministerioprint";
        $this->templatePrint="/progama/print/print-vida-ministerio";
    }



    public function vidaministerioprintAction(){
       if($this->params()->fromRoute('id'))
       {
           //$this->terminal=true;
           $this->templatePrint="/progama/print/print-vida-ministerio-item";
       }
        return parent::printAction();
    }
}


<?php
/**
 * @license © 2005 - 2016 by Zend Technologies Ltd. All rights reserved.
 */


namespace Progama\Controller;

use Base\Controller\AbstractController;
use Interop\Container\ContainerInterface;
use Progama\Form\DesignacoesFilter;
use Progama\Form\DesignacoesForm;
use Progama\Model\Designacoes\Designacoes;
use Progama\Model\Designacoes\DesignacoesRepository;

/**
 * SIGA-Smart
 *
 * Esta class foi gerada via Zend\Code\Generator.
 */
class DesignacoesController extends AbstractController
{

    /**
     * __construct Factory Model
     *
     * @param ContainerInterface $containerInterface
     * @return \Progama\Controller\DesignacoesController
     */
    public function __construct(ContainerInterface $containerInterface)
    {
        // Configurações iniciais do Controller
        $this->containerInterface=$containerInterface;
        $this->table=DesignacoesRepository::class;
        $this->model=Designacoes::class;
        $this->form=DesignacoesForm::class;
        $this->filter=DesignacoesFilter::class;
        $this->route="progama";
        $this->controller="designacoes";
        $this->action_print="vida-ministerio-designacoes-print";
        $this->templatePrint="/progama/print/print-designacoes";
    }

    public function vidaministeriodesignacoesprintAction(){
        return parent::printAction();
    }


}


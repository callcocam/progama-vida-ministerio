<?php
/**
 * @license © 2005 - 2016 by Zend Technologies Ltd. All rights reserved.
 */


namespace Progama\Controller;

use Base\Controller\AbstractController;
use Interop\Container\ContainerInterface;
use Progama\Form\CongregacaoFilter;
use Progama\Form\CongregacaoForm;
use Progama\Model\Congregacao\Congregacao;
use Progama\Model\Congregacao\CongregacaoRepository;

/**
 * SIGA-Smart
 *
 * Esta class foi gerada via Zend\Code\Generator.
 */
class CongregacaoController extends AbstractController
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
        $this->table=CongregacaoRepository::class;
        $this->model=Congregacao::class;
        $this->form=CongregacaoForm::class;
        $this->filter=CongregacaoFilter::class;
        $this->route="progama";
        $this->controller="congregacao";
    }


}


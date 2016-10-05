<?php
/**
 * @license © 2005 - 2016 by Zend Technologies Ltd. All rights reserved.
 */


namespace Progama\Controller;

use Base\Controller\AbstractController;
use Interop\Container\ContainerInterface;
use Progama\Form\FacamelhormisterioFilter;
use Progama\Form\FacamelhormisterioForm;
use Progama\Model\Facamelhormisterio\Facamelhormisterio;
use Progama\Model\Facamelhormisterio\FacamelhormisterioRepository;
use Zend\Debug\Debug;

/**
 * SIGA-Smart
 *
 * Esta class foi gerada via Zend\Code\Generator.
 */
class FacamelhormisterioController extends AbstractController
{

    /**
     * __construct Factory Model
     *
     * @param ContainerInterface $containerInterface
     * @return \Progama\Controller\FacamelhormisterioController
     */
    public function __construct(ContainerInterface $containerInterface)
        {
            // Configurações iniciais do Controller
            $this->containerInterface=$containerInterface;
            $this->table=FacamelhormisterioRepository::class;
            $this->model=Facamelhormisterio::class;
            $this->form=FacamelhormisterioForm::class;
            $this->filter=FacamelhormisterioFilter::class;
            $this->route="progama";
            $this->controller="facamelhormisterio";
            $this->templatePrint="/progama/print/print-designacao";
            $this->action_print='print-facamelhor';
        }

        public function printfacamelhorAction(){

            return parent::printAction();
        }

   }


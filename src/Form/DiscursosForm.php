<?php
/**
 * @license © 2005 - 2016 by Zend Technologies Ltd. All rights reserved.
 */


namespace Progama\Form;

use Base\Form\AbstractForm;
use Interop\Container\ContainerInterface;
use Progama\Form\DiscursosFilter;

/**
 * SIGA-Smart
 *
 * Esta class foi gerada via Zend\Code\Generator.
 */
class DiscursosForm extends AbstractForm
{

    /**
     * construct do Table
     *
     * @return  \Progama\Form\DiscursosForm
     * @param ContainerInterface $containerInterface
     * @param string $name
     * @param array $options
     */
    public function __construct(ContainerInterface $containerInterface, $name = 'Discursos', array $options = array())
    {
        // Configurações iniciais do Form;
        parent::__construct($containerInterface, $name, $options);
        $this->setAttribute("id","Manager");
        $this->setInputFilter($containerInterface->get(DiscursosFilter::class));
        $this->setId([]);
        $this->setAssetid([]);
        $this->setCodigo([]);
        $this->setEmpresa([]);
                    //############################################ informações da coluna numero ##############################################:
        		    $this->add([
        	                   'type' => 'text',//text,hidden, select, radio, checkbox, textarea
        	                    'name' => 'numero',
        	                    'options' => [
                     	'label' => 'FILD_NUMERO_LABEL',
                    	//'value_options'      =>[],
        				//'disable_inarray_validator' => true,
        				//'label_attributes'=>['class'=>'control-label','for'=>'NUMERO'],
        				//'add-on-append'=>'aws-font'
         ],
        	                    'attributes' => [
                'id'=>'numero',
                'class' =>'form-control',
                'title' => 'FILD_NUMERO_DESC',
                'placeholder' => 'FILD_NUMERO_PLACEHOLDER',
                //'readonly' => true/false,
                //'requerid' => true/false,
                'data-access' => '3',
                'data-position' => 'geral',
            	        	        ],
        	               ]
        	            );
        
        
                    //############################################ informações da coluna title ##############################################:
        		    $this->add([
        	                   'type' => 'text',//text,hidden, select, radio, checkbox, textarea
        	                    'name' => 'title',
        	                    'options' => [
                     	'label' => 'FILD_TITLE_LABEL',
                    	//'value_options'      =>[],
        				//'disable_inarray_validator' => true,
        				//'label_attributes'=>['class'=>'control-label','for'=>'TITLE'],
        				//'add-on-append'=>'aws-font'
         ],
        	                    'attributes' => [
                'id'=>'title',
                'class' =>'form-control',
                'title' => 'FILD_TITLE_DESC',
                'placeholder' => 'FILD_TITLE_PLACEHOLDER',
                //'readonly' => true/false,
                //'requerid' => true/false,
                'data-access' => '3',
                'data-position' => 'geral',
            	        	        ],
        	               ]
        	            );
        
        
        $this->setDescription([]);
        $this->setAccess([]);
        $this->setState([]);
        $this->setCreated([]);
        $this->setModified([]);
        $this->setCsrf([]);
        $this->setSave([]);
    }


}


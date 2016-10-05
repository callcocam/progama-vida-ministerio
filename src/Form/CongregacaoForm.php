<?php
/**
 * @license © 2005 - 2016 by Zend Technologies Ltd. All rights reserved.
 */


namespace Progama\Form;

use Base\Form\AbstractForm;
use Interop\Container\ContainerInterface;
use Progama\Form\CongregacaoFilter;

/**
 * SIGA-Smart
 *
 * Esta class foi gerada via Zend\Code\Generator.
 */
class CongregacaoForm extends AbstractForm
{

    /**
     * construct do Table
     *
     * @return  \Progama\Form\CongregacaoForm
     * @param ContainerInterface $containerInterface
     * @param string $name
     * @param array $options
     */
    public function __construct(ContainerInterface $containerInterface, $name = 'Congregacao', array $options = array())
    {
        // Configurações iniciais do Form;
        parent::__construct($containerInterface, $name, $options);
        $this->setAttribute("id","Manager");
        $this->setInputFilter($containerInterface->get(CongregacaoFilter::class));
        $this->setId([]);
        $this->setAssetid([]);
        $this->setCodigo([]);
        $this->setEmpresa([]);
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


        //############################################ informações da coluna endereco ##############################################:
        $this->add([
                'type' => 'text',//text,hidden, select, radio, checkbox, textarea
                'name' => 'endereco',
                'options' => [
                    'label' => 'FILD_ENDERECO_LABEL',
                    //'value_options'      =>[],
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label','for'=>'ENDERECO'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'endereco',
                    'class' =>'form-control',
                    'title' => 'FILD_ENDERECO_DESC',
                    'placeholder' => 'FILD_ENDERECO_PLACEHOLDER',
                    //'readonly' => true/false,
                    //'requerid' => true/false,
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );


        //############################################ informações da coluna latitude ##############################################:
        $this->add([
                'type' => 'text',//text,hidden, select, radio, checkbox, textarea
                'name' => 'latitude',
                'options' => [
                    'label' => 'FILD_LATITUDE_LABEL',
                    //'value_options'      =>[],
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label','for'=>'LATITUDE'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'latitude',
                    'class' =>'form-control',
                    'title' => 'FILD_LATITUDE_DESC',
                    'placeholder' => 'FILD_LATITUDE_PLACEHOLDER',
                    //'readonly' => true/false,
                    //'requerid' => true/false,
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );


        //############################################ informações da coluna longetude ##############################################:
        $this->add([
                'type' => 'text',//text,hidden, select, radio, checkbox, textarea
                'name' => 'longetude',
                'options' => [
                    'label' => 'FILD_LONGETUDE_LABEL',
                    //'value_options'      =>[],
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label','for'=>'LONGETUDE'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'longetude',
                    'class' =>'form-control',
                    'title' => 'FILD_LONGETUDE_DESC',
                    'placeholder' => 'FILD_LONGETUDE_PLACEHOLDER',
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
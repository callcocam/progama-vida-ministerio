<?php
/**
 * @license © 2005 - 2016 by Zend Technologies Ltd. All rights reserved.
 */


namespace Progama\Form;

use Base\Form\AbstractForm;
use Interop\Container\ContainerInterface;
use Progama\Form\VidaministerioFilter;
use Progama\Model\Publicadores\PublicadoresRepository;

/**
 * SIGA-Smart
 *
 * Esta class foi gerada via Zend\Code\Generator.
 */
class VidaministerioForm extends AbstractForm
{

    /**
     * construct do Table
     *
     * @return  \Progama\Form\VidaministerioForm
     * @param ContainerInterface $containerInterface
     * @param string $name
     * @param array $options
     */
    public function __construct(ContainerInterface $containerInterface, $name = 'Vidaministerio', array $options = array())
    {
        // Configurações iniciais do Form;
        parent::__construct($containerInterface, $name, $options);
        $this->setAttribute("id","Manager");
        $this->setInputFilter($containerInterface->get(VidaministerioFilter::class));
        $this->setId([]);
        $this->setAssetid([]);
        $this->setCodigo([]);
        $this->setEmpresa([]);
        //############################################ informações da coluna publish_up ##############################################:
        $this->add([
                'type' => 'text',//text,hidden, select, radio, checkbox, textarea
                'name' => 'publish_up',
                'options' => [
                    'label' => 'FILD_PUBLISH_UP_LABEL',
                    //'value_options'      =>[],
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label','for'=>'PUBLISH_UP'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'publish_up',
                    'class' =>'form-control',
                    'title' => 'FILD_PUBLISH_UP_DESC',
                    'placeholder' => 'FILD_PUBLISH_UP_PLACEHOLDER',
                    //'readonly' => true/false,
                    //'requerid' => true/false,
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );


        //############################################ informações da coluna publish_down ##############################################:
        $this->add([
                'type' => 'text',//text,hidden, select, radio, checkbox, textarea
                'name' => 'publish_down',
                'options' => [
                    'label' => 'FILD_PUBLISH_DOWN_LABEL',
                    //'value_options'      =>[],
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label','for'=>'PUBLISH_DOWN'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'publish_down',
                    'class' =>'form-control',
                    'title' => 'FILD_PUBLISH_DOWN_DESC',
                    'placeholder' => 'FILD_PUBLISH_DOWN_PLACEHOLDER',
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


        //############################################ informações da coluna presidente ##############################################:
        $this->add([
                'type' => 'select',//text,hidden, select, radio, checkbox, textarea
                'name' => 'presidente',
                'options' => [
                    'label' => 'FILD_PRESIDENTE_LABEL',
                    'value_options'      =>$this->setValueOption(PublicadoresRepository::class,['privilegio'=>'Ancião']),
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label','for'=>'PRESIDENTE'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'presidente',
                    'class' =>'form-control select',
                    'title' => 'FILD_PRESIDENTE_DESC',
                    'placeholder' => 'FILD_PRESIDENTE_PLACEHOLDER',
                    //'readonly' => true/false,
                    //'requerid' => true/false,
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );

        //############################################ informações da coluna cantico_inicial ##############################################:
        $this->add([
                'type' => 'text',//text,hidden, select, radio, checkbox, textarea
                'name' => 'cantico_inicial',
                'options' => [
                    'label' => 'FILD_CANTICO_INICIAL_LABEL',
                    //'value_options'      =>[],
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label','for'=>'CANTICO_INICIAL'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'cantico_inicial',
                    'class' =>'form-control',
                    'title' => 'FILD_CANTICO_INICIAL_DESC',
                    'placeholder' => 'FILD_CANTICO_INICIAL_PLACEHOLDER',
                    //'readonly' => true/false,
                    //'requerid' => true/false,
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );


        //############################################ informações da coluna cantico_transicao ##############################################:
        $this->add([
                'type' => 'text',//text,hidden, select, radio, checkbox, textarea
                'name' => 'cantico_transicao',
                'options' => [
                    'label' => 'FILD_CANTICO_TRANSICAO_LABEL',
                    //'value_options'      =>[],
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label','for'=>'CANTICO_TRANSICAO'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'cantico_transicao',
                    'class' =>'form-control',
                    'title' => 'FILD_CANTICO_TRANSICAO_DESC',
                    'placeholder' => 'FILD_CANTICO_TRANSICAO_PLACEHOLDER',
                    //'readonly' => true/false,
                    //'requerid' => true/false,
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );


        //############################################ informações da coluna cantico_final ##############################################:
        $this->add([
                'type' => 'text',//text,hidden, select, radio, checkbox, textarea
                'name' => 'cantico_final',
                'options' => [
                    'label' => 'FILD_CANTICO_FINAL_LABEL',
                    //'value_options'      =>[],
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label','for'=>'CANTICO_FINAL'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'cantico_final',
                    'class' =>'form-control',
                    'title' => 'FILD_CANTICO_FINAL_DESC',
                    'placeholder' => 'FILD_CANTICO_FINAL_PLACEHOLDER',
                    //'readonly' => true/false,
                    //'requerid' => true/false,
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );


        //############################################ informações da coluna oracao_final ##############################################:
        $this->add([
                'type' => 'select',//text,hidden, select, radio, checkbox, textarea
                'name' => 'oracao_final',
                'options' => [
                    'label' => 'FILD_ORACAO_FINAL_LABEL',
                    'value_options'      =>$this->setValueOption(PublicadoresRepository::class,['gender'=>'IRMÃO']),
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label','for'=>'ORACAO_FINAL'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'oracao_final',
                    'class' =>'form-control select',
                    'title' => 'FILD_ORACAO_FINAL_DESC',
                    'placeholder' => 'FILD_ORACAO_FINAL_PLACEHOLDER',
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
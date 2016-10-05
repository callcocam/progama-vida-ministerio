<?php
/**
 * @license © 2005 - 2016 by Zend Technologies Ltd. All rights reserved.
 */


namespace Progama\Form;

use Base\Form\AbstractForm;
use Interop\Container\ContainerInterface;
use Progama\Form\PublicadoresFilter;
use Progama\Model\Congregacao\CongregacaoRepository;

/**
 * SIGA-Smart
 *
 * Esta class foi gerada via Zend\Code\Generator.
 */
class PublicadoresForm extends AbstractForm
{

    /**
     * construct do Table
     *
     * @return  \Progama\Form\PublicadoresForm
     * @param ContainerInterface $containerInterface
     * @param string $name
     * @param array $options
     */
    public function __construct(ContainerInterface $containerInterface, $name = 'Publicadores', array $options = array())
    {
        // Configurações iniciais do Form;
        parent::__construct($containerInterface, $name, $options);
        $this->setAttribute("id","Manager");
        $this->setInputFilter($containerInterface->get(PublicadoresFilter::class));
        $this->setId([]);
        $this->setAssetid([]);
        $this->setCodigo([]);
        $this->setEmpresa([]);
        //############################################ informações da coluna congregacao_id ##############################################:
        $this->add([
                'type' => 'select',//text,hidden, select, radio, checkbox, textarea
                'name' => 'congregacao_id',
                'options' => [
                    'label' => 'FILD_CONGREGACAO_ID_LABEL',
                    'value_options'      =>$this->setValueOption(CongregacaoRepository::class),
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label','for'=>'CONGREGACAO_ID'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'congregacao_id',
                    'class' =>'form-control',
                    'title' => 'FILD_CONGREGACAO_ID_DESC',
                    'placeholder' => 'FILD_CONGREGACAO_ID_PLACEHOLDER',
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


        //############################################ informações da coluna gender ##############################################:
        $this->add([
                'type' => 'radio',//text,hidden, select, radio, checkbox, textarea
                'name' => 'gender',
                'options' => [
                    //'label' => 'FILD_GENDER_LABEL',
                    'value_options'      =>['IRMÃO'=>'IRMÃO','IRMÃ'=>'IRMÃ'],
                    //'disable_inarray_validator' => true,
                    'label_attributes'=>['class'=>'radio-inline radio-styled','for'=>'GENDER'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'gender',
                    //'class' =>'form-control',
                    'title' => 'FILD_GENDER_DESC',
                    //'placeholder' => 'FILD_GENDER_PLACEHOLDER',
                    //'readonly' => true/false,
                    //'requerid' => true/false,
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );


        //############################################ informações da coluna privilegio ##############################################:
        $this->add([
                'type' => 'radio',//text,hidden, select, radio, checkbox, textarea
                'name' => 'privilegio',
                'options' => [
                    //'label' => 'FILD_PRIVILEGIO_LABEL',
                    'value_options'      =>['Publicador'=>'Publicador','Batizado'=>'Batizado','Servo'=>'Servo','Ancião'=>'Ancião'],
                    //'disable_inarray_validator' => true,
                    'label_attributes'=>['class'=>'radio-inline radio-styled','for'=>'PRIVILEGIO'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'privilegio',
                    //'class' =>'form-control',
                    'title' => 'FILD_PRIVILEGIO_DESC',
                    'placeholder' => 'FILD_PRIVILEGIO_PLACEHOLDER',
                    //'readonly' => true/false,
                    //'requerid' => true/false,
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );


        //############################################ informações da coluna email ##############################################:
        $this->add([
                'type' => 'text',//text,hidden, select, radio, checkbox, textarea
                'name' => 'email',
                'options' => [
                    'label' => 'FILD_EMAIL_LABEL',
                    //'value_options'      =>[],
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label','for'=>'EMAIL'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'email',
                    'class' =>'form-control',
                    'title' => 'FILD_EMAIL_DESC',
                    'placeholder' => 'FILD_EMAIL_PLACEHOLDER',
                    //'readonly' => true/false,
                    //'requerid' => true/false,
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );


        //############################################ informações da coluna phone ##############################################:
        $this->add([
                'type' => 'text',//text,hidden, select, radio, checkbox, textarea
                'name' => 'phone',
                'options' => [
                    'label' => 'FILD_PHONE_LABEL',
                    //'value_options'      =>[],
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label','for'=>'PHONE'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'phone',
                    'class' =>'form-control',
                    'title' => 'FILD_PHONE_DESC',
                    'placeholder' => 'FILD_PHONE_PLACEHOLDER',
                    //'readonly' => true/false,
                    //'requerid' => true/false,
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );


        $this->setAtachament([]);
        $this->setDescription([]);
        $this->setAccess([]);
        $this->setState([]);
        $this->setCreated([]);
        $this->setModified([]);
        $this->setCsrf([]);
        $this->setSave([]);
        $this->setSaveCopy([]);
    }
}
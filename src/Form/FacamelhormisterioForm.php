<?php
/**
 * @license © 2005 - 2016 by Zend Technologies Ltd. All rights reserved.
 */


namespace Progama\Form;

use Base\Form\AbstractForm;
use Interop\Container\ContainerInterface;
use Progama\Form\FacamelhormisterioFilter;
use Progama\Model\Publicadores\PublicadoresRepository;
use Progama\Model\Vidaministerio\VidaministerioRepository;

/**
 * SIGA-Smart
 *
 * Esta class foi gerada via Zend\Code\Generator.
 */
class FacamelhormisterioForm extends AbstractForm
{

    /**
     * construct do Table
     *
     * @return  \Progama\Form\FacamelhormisterioForm
     * @param ContainerInterface $containerInterface
     * @param string $name
     * @param array $options
     */
    public function __construct(ContainerInterface $containerInterface, $name = 'Facamelhormisterio', array $options = array())
    {
        // Configurações iniciais do Form;
        parent::__construct($containerInterface, $name, $options);
        $this->setAttribute("id","Manager");
        $this->setInputFilter($containerInterface->get(FacamelhormisterioFilter::class));
        $this->setId([]);
        $this->setAssetid([]);
        $this->setCodigo([]);
        $this->setEmpresa([]);
        //############################################ informações da coluna vida_ministerio_id ##############################################:
        $this->add([
                'type' => 'select',//text,hidden, select, radio, checkbox, textarea
                'name' => 'vida_ministerio_id',
                'options' => [
                    'label' => 'FILD_VIDA_MINISTERIO_ID_LABEL',
                    'value_options'      =>$this->setValueOption(VidaministerioRepository::class,['state'=>'0']),
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label','for'=>'VIDA_MINISTERIO_ID'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'vida_ministerio_id',
                    'class' =>'form-control',
                    'title' => 'FILD_VIDA_MINISTERIO_ID_DESC',
                    'placeholder' => 'FILD_VIDA_MINISTERIO_ID_PLACEHOLDER',
                    //'readonly' => true/false,
                    //'requerid' => true/false,
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );


        //############################################ informações da coluna tempo ##############################################:
        $this->add([
                'type' => 'radio',//text,hidden, select, radio, checkbox, textarea
                'name' => 'tempo',
                'options' => [
                    'label' => 'FILD_TEMPO_LABEL',
                    'value_options'      =>['2'=>'2 MIN','4'=>'4 MIN','6'=>'6 MIN'],
                    //'disable_inarray_validator' => true,
                    'label_attributes'=>['class'=>'radio-inline radio-styled','for'=>'TEMPO'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'tempo',
                    'class' =>'form-control',
                    'title' => 'FILD_TEMPO_DESC',
                    'placeholder' => 'FILD_TEMPO_PLACEHOLDER',
                    //'readonly' => true/false,
                    //'requerid' => true/false,
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );


        //############################################ informações da coluna title ##############################################:
        $this->add([
                'type' => 'radio',//text,hidden, select, radio, checkbox, textarea
                'name' => 'title',
                'options' => [
                    'label' => 'FILD_TITLE_LABEL',
                    'value_options'      =>['PRIMEIRA VISITA'=>'VISITA','REVISITA'=>'REVISITA','ESTUD. BIBLICO'=>'ESTUD. BIBLICO'],
                    //'disable_inarray_validator' => true,
                    'label_attributes'=>['class'=>'radio-inline radio-styled','for'=>'TITLE'],
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

        //############################################ informações da coluna publicador_id ##############################################:
        $this->add([
                'type' => 'select',//text,hidden, select, radio, checkbox, textarea
                'name' => 'publicador_id',
                'options' => [
                    'label' => 'FILD_PUBLICADOR_ID_LABEL',
                    'value_options'      =>$this->setValueOption(PublicadoresRepository::class,['privilegio'=>['Batizado','Publicador']]),
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label','for'=>'PUBLICADOR_ID'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'publicador_id',
                    'class' =>'form-control select',
                    'title' => 'FILD_PUBLICADOR_ID_DESC',
                    'placeholder' => 'FILD_PUBLICADOR_ID_PLACEHOLDER',
                    //'readonly' => true/false,
                    //'requerid' => true/false,
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );


        //############################################ informações da coluna ajudante_id ##############################################:
        $this->add([
                'type' => 'select',//text,hidden, select, radio, checkbox, textarea
                'name' => 'ajudante_id',
                'options' => [
                    'label' => 'FILD_AJUDANTE_ID_LABEL',
                    'value_options'      =>$this->setValueOption(PublicadoresRepository::class,['privilegio'=>['Batizado','Publicador']]),
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label','for'=>'AJUDANTE_ID'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'ajudante_id',
                    'class' =>'form-control select',
                    'title' => 'FILD_AJUDANTE_ID_DESC',
                    'placeholder' => 'FILD_AJUDANTE_ID_PLACEHOLDER',
                    //'readonly' => true/false,
                    //'requerid' => true/false,
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );



        //############################################ informações da coluna ponto_id ##############################################:
        $this->add([
                'type' => 'text',//text,hidden, select, radio, checkbox, textarea
                'name' => 'ponto_id',
                'options' => [
                    'label' => 'FILD_PONTO_ID_LABEL',
                    //'value_options'      =>[],
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label','for'=>'PONTO_ID'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'ponto_id',
                    'class' =>'form-control',
                    'title' => 'FILD_PONTO_ID_DESC',
                    'placeholder' => 'FILD_PONTO_ID_PLACEHOLDER',
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
        $this->setSaveCopy([]);
    }
}
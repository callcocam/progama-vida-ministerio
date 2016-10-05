<?php
/**
 * @license © 2005 - 2016 by Zend Technologies Ltd. All rights reserved.
 */


namespace Progama\Form;

use Base\Form\AbstractForm;
use Interop\Container\ContainerInterface;
use Progama\Form\VidacristaFilter;
use Progama\Model\Publicadores\PublicadoresRepository;
use Progama\Model\Vidaministerio\VidaministerioRepository;

/**
 * SIGA-Smart
 *
 * Esta class foi gerada via Zend\Code\Generator.
 */
class VidacristaForm extends AbstractForm
{

    /**
     * construct do Table
     *
     * @return  \Progama\Form\VidacristaForm
     * @param ContainerInterface $containerInterface
     * @param string $name
     * @param array $options
     */
    public function __construct(ContainerInterface $containerInterface, $name = 'Vidacrista', array $options = array())
    {
        // Configurações iniciais do Form;
        parent::__construct($containerInterface, $name, $options);
        $this->setAttribute("id","Manager");
        $this->setInputFilter($containerInterface->get(VidacristaFilter::class));
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
                    'class' =>'form-control select',
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
                'type' => 'text',//text,hidden, select, radio, checkbox, textarea
                'name' => 'tempo',
                'options' => [
                    'label' => 'FILD_TEMPO_LABEL',
                    //'value_options'      =>[],
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label','for'=>'TEMPO'],
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



        //############################################ informações da coluna publicador_id ##############################################:
        $this->add([
                'type' => 'select',//text,hidden, select, radio, checkbox, textarea
                'name' => 'publicador_id',
                'options' => [
                    'label' => 'FILD_PUBLICADOR_ID_LABEL',
                    'value_options'      =>$this->setValueOption(PublicadoresRepository::class,['privilegio'=>['Servo','Ancião']]),
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
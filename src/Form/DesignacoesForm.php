<?php
/**
 * @license © 2005 - 2016 by Zend Technologies Ltd. All rights reserved.
 */


namespace Progama\Form;

use Base\Form\AbstractForm;
use Interop\Container\ContainerInterface;
use Progama\Form\DesignacoesFilter;
use Progama\Model\Indicadores\IndicadoresRepository;
use Progama\Model\Leitorlivro\LeitorlivroRepository;
use Progama\Model\Leitorsentinela\LeitorsentinelaRepository;
use Progama\Model\Reuniao\ReuniaoRepository;
use Progama\Model\Som\SomRepository;
use Progama\Model\Tribuna\TribunaRepository;
use Progama\Model\Vidaministerio\VidaministerioRepository;
use Progama\Model\Volantes\VolantesRepository;

/**
 * SIGA-Smart
 *
 * Esta class foi gerada via Zend\Code\Generator.
 */
class DesignacoesForm extends AbstractForm
{

    /**
     * construct do Table
     *
     * @return  \Progama\Form\DesignacoesForm
     * @param ContainerInterface $containerInterface
     * @param string $name
     * @param array $options
     */
    public function __construct(ContainerInterface $containerInterface, $name = 'Designacoes', array $options = array())
    {
        // Configurações iniciais do Form;
        parent::__construct($containerInterface, $name, $options);
        $this->setAttribute("id","Manager");
        $this->setInputFilter($containerInterface->get(DesignacoesFilter::class));
        $this->setId([]);
        $this->setAssetid([]);
        $this->setCodigo([]);
        $this->setEmpresa([]);
        //############################################ informações da coluna reuniao_id ##############################################:
        $this->add([
                'type' => 'select',//text,hidden, select, radio, checkbox, textarea
                'name' => 'reuniao_id',
                'options' => [
                    'label' => 'FILD_REUNIAO_ID_LABEL',
                     'value_options'      =>$this->setValueOption(ReuniaoRepository::class),
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label','for'=>'REUNIAO_ID'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'reuniao_id',
                    'class' =>'form-control select reuniao_title_designacoes',
                    'title' => 'FILD_REUNIAO_ID_DESC',
                    'placeholder' => 'FILD_REUNIAO_ID_PLACEHOLDER',
                    //'readonly' => true/false,
                    //'requerid' => true/false,
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );


        //############################################ informações da coluna title ##############################################:
        $this->add([
                'type' => 'select',//text,hidden, select, radio, checkbox, textarea
                'name' => 'title',
                'options' => [
                    'label' => 'FILD_TITLE_LABEL',
                    'value_options'      =>$this->setValueOption(VidaministerioRepository::class),
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label','for'=>'TITLE'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'title',
                    'class' =>'form-control select reuniao_title_designacoes',
                    'title' => 'FILD_TITLE_DESC',
                    'placeholder' => 'FILD_TITLE_PLACEHOLDER',
                    //'readonly' => true/false,
                    //'requerid' => true/false,
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );


        //############################################ informações da coluna indidacador_id ##############################################:
        $this->add([
                'type' => 'select',//text,hidden, select, radio, checkbox, textarea
                'name' => 'indidacador_id',
                'options' => [
                    'label' => 'FILD_INDIDACADOR_ID_LABEL',
                    'value_options'      =>$this->setValueOption(IndicadoresRepository::class),
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label','for'=>'INDIDACADOR_ID'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'indidacador_id',
                    'class' =>'form-control select',
                    'title' => 'FILD_INDIDACADOR_ID_DESC',
                    'placeholder' => 'FILD_INDIDACADOR_ID_PLACEHOLDER',
                    //'readonly' => true/false,
                    //'requerid' => true/false,
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );


        //############################################ informações da coluna volante_id ##############################################:
        $this->add([
                'type' => 'select',//text,hidden, select, radio, checkbox, textarea
                'name' => 'volante_id',
                'options' => [
                    'label' => 'FILD_VOLANTE_ID_LABEL',
                    'value_options'      =>$this->setValueOption(VolantesRepository::class),
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label','for'=>'VOLANTE_ID'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'volante_id',
                    'class' =>'form-control select',
                    'title' => 'FILD_VOLANTE_ID_DESC',
                    'placeholder' => 'FILD_VOLANTE_ID_PLACEHOLDER',
                    //'readonly' => true/false,
                    //'requerid' => true/false,
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );


        //############################################ informações da coluna tribuna_id ##############################################:
        $this->add([
                'type' => 'select',//text,hidden, select, radio, checkbox, textarea
                'name' => 'tribuna_id',
                'options' => [
                    'label' => 'FILD_TRIBUNA_ID_LABEL',
                    'value_options'      =>$this->setValueOption(TribunaRepository::class),
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label','for'=>'TRIBUNA_ID'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'tribuna_id',
                    'class' =>'form-control select',
                    'title' => 'FILD_TRIBUNA_ID_DESC',
                    'placeholder' => 'FILD_TRIBUNA_ID_PLACEHOLDER',
                    //'readonly' => true/false,
                    //'requerid' => true/false,
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );


        //############################################ informações da coluna som_id ##############################################:
        $this->add([
                'type' => 'select',//text,hidden, select, radio, checkbox, textarea
                'name' => 'som_id',
                'options' => [
                    'label' => 'FILD_SOM_ID_LABEL',
                    'value_options'      =>$this->setValueOption(SomRepository::class),
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label','for'=>'SOM_ID'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'som_id',
                    'class' =>'form-control select',
                    'title' => 'FILD_SOM_ID_DESC',
                    'placeholder' => 'FILD_SOM_ID_PLACEHOLDER',
                    //'readonly' => true/false,
                    //'requerid' => true/false,
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );


        //############################################ informações da coluna leitor_sentinela_id ##############################################:
        $this->add([
                'type' => 'select',//text,hidden, select, radio, checkbox, textarea
                'name' => 'leitor_sentinela_id',
                'options' => [
                    'label' => 'FILD_LEITOR_SENTINELA_ID_LABEL',
                    'value_options'      =>$this->setValueOption(LeitorsentinelaRepository::class),
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label','for'=>'LEITOR_SENTINELA_ID'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'leitor_sentinela_id',
                    'class' =>'form-control select',
                    'title' => 'FILD_LEITOR_SENTINELA_ID_DESC',
                    'placeholder' => 'FILD_LEITOR_SENTINELA_ID_PLACEHOLDER',
                    //'readonly' => true/false,
                    //'requerid' => true/false,
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );


        //############################################ informações da coluna leitor_livro_id ##############################################:
        $this->add([
                'type' => 'select',//text,hidden, select, radio, checkbox, textarea
                'name' => 'leitor_livro_id',
                'options' => [
                    'label' => 'FILD_LEITOR_LIVRO_ID_LABEL',
                    'value_options'      =>$this->setValueOption(LeitorlivroRepository::class),
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label','for'=>'LEITOR_LIVRO_ID'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'leitor_livro_id',
                    'class' =>'form-control select',
                    'title' => 'FILD_LEITOR_LIVRO_ID_DESC',
                    'placeholder' => 'FILD_LEITOR_LIVRO_ID_PLACEHOLDER',
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
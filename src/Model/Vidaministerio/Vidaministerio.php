<?php
/**
 * @license © 2005 - 2016 by Zend Technologies Ltd. All rights reserved.
 */


namespace Progama\Model\Vidaministerio;

use Base\Model\AbstractModel;

/**
 * SIGA-Smart
 *
 * Esta class foi gerada via Zend\Code\Generator.
 */
class Vidaministerio extends AbstractModel
{

    protected $publish_up = '0000-00-00';

    protected $publish_down = '0000-00-00';

    protected $title = null;

    protected $presidente = null;

    protected $cantico_inicial = '00000';

    protected $cantico_transicao = '00000';

    protected $cantico_final = '00000';

    protected $oracao_final = '00000';

    /**
     * get publish_up
     *
     * @return date
     */
    public function getPublishUp()
    {
        if($this->publish_up instanceof \DateTime){
            return $this->publish_up->format('Y-m-d');
        }
        return $this->publish_up;
    }

    /**
     * get publish_down
     *
     * @return date
     */
    public function getPublishDown()
    {
        if($this->publish_down instanceof \DateTime){
            return $this->publish_down->format('Y-m-d');
        }
        return $this->publish_down;
    }

    /**
     * get title
     *
     * @return varchar
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * get presidente
     *
     * @return varchar
     */
    public function getPresidente()
    {
        return $this->presidente;
    }

    /**
     * get cantico_inicial
     *
     * @return int
     */
    public function getCanticoInicial()
    {
        return $this->cantico_inicial;
    }

    /**
     * get cantico_transicao
     *
     * @return int
     */
    public function getCanticoTransicao()
    {
        return $this->cantico_transicao;
    }

    /**
     * get cantico_final
     *
     * @return int
     */
    public function getCanticoFinal()
    {
        return $this->cantico_final;
    }

    /**
     * get oracao_final
     *
     * @return int
     */
    public function getOracaoFinal()
    {
        return $this->oracao_final;
    }

    /**
     * set publish_up
     *
     * @return date
     */
    public function setPublishUp($publish_up = '0000-00-00')
    {
        $this->publish_up=new \DateTime($publish_up);;
        return $this;
    }

    /**
     * set publish_down
     *
     * @return date
     */
    public function setPublishDown($publish_down = '0000-00-00')
    {
        $this->publish_down=new \DateTime($publish_down);;
        return $this;
    }

    /**
     * set title
     *
     * @return varchar
     */
    public function setTitle($title = null)
    {
        $this->title=$title;
        return $this;
    }

    /**
     * set presidente
     *
     * @return varchar
     */
    public function setPresidente($presidente = null)
    {
        $this->presidente=$presidente;
        return $this;
    }

    /**
     * set cantico_inicial
     *
     * @return int
     */
    public function setCanticoInicial($cantico_inicial = '00000')
    {
        $this->cantico_inicial=$cantico_inicial;
        return $this;
    }

    /**
     * set cantico_transicao
     *
     * @return int
     */
    public function setCanticoTransicao($cantico_transicao = '00000')
    {
        $this->cantico_transicao=$cantico_transicao;
        return $this;
    }

    /**
     * set cantico_final
     *
     * @return int
     */
    public function setCanticoFinal($cantico_final = '00000')
    {
        $this->cantico_final=$cantico_final;
        return $this;
    }

    /**
     * set oracao_final
     *
     * @return int
     */
    public function setOracaoFinal($oracao_final = '00000')
    {
        $this->oracao_final=$oracao_final;
        return $this;
    }


}


<?php
/**
 * @license © 2005 - 2016 by Zend Technologies Ltd. All rights reserved.
 */


namespace Progama\Model\Reuniaopublica;

use Base\Model\AbstractModel;

/**
 * SIGA-Smart
 *
 * Esta class foi gerada via Zend\Code\Generator.
 */
class Reuniaopublica extends AbstractModel
{

    protected $title = null;

    protected $dirigente_id = '00000';

    protected $orador_id = '00000';

    protected $presidente_id = '00000';

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
     * get dirigente_id
     *
     * @return int
     */
    public function getDirigenteId()
    {
        return $this->dirigente_id;
    }

    /**
     * get orador_id
     *
     * @return int
     */
    public function getOradorId()
    {
        return $this->orador_id;
    }

    /**
     * get presidente_id
     *
     * @return int
     */
    public function getPresidenteId()
    {
        return $this->presidente_id;
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
     * set dirigente_id
     *
     * @return int
     */
    public function setDirigenteId($dirigente_id = '00000')
    {
        $this->dirigente_id=$dirigente_id;
        return $this;
    }

    /**
     * set orador_id
     *
     * @return int
     */
    public function setOradorId($orador_id = '00000')
    {
        $this->orador_id=$orador_id;
        return $this;
    }

    /**
     * set presidente_id
     *
     * @return int
     */
    public function setPresidenteId($presidente_id = '00000')
    {
        $this->presidente_id=$presidente_id;
        return $this;
    }


}


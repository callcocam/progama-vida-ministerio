<?php
/**
 * @license © 2005 - 2016 by Zend Technologies Ltd. All rights reserved.
 */


namespace Progama\Model\Presidente;

use Base\Model\AbstractModel;

/**
 * SIGA-Smart
 *
 * Esta class foi gerada via Zend\Code\Generator.
 */
class Presidente extends AbstractModel
{

    protected $publicador_id = '00000';

    protected $title = null;

    /**
     * get publicador_id
     *
     * @return int
     */
    public function getPublicadorId()
    {
        return $this->publicador_id;
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
     * set publicador_id
     *
     * @return int
     */
    public function setPublicadorId($publicador_id = '00000')
    {
        $this->publicador_id=$publicador_id;
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


}


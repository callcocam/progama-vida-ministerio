<?php
/**
 * @license © 2005 - 2016 by Zend Technologies Ltd. All rights reserved.
 */


namespace Progama\Model\Facamelhormisterio;

use Base\Model\AbstractModel;

/**
 * SIGA-Smart
 *
 * Esta class foi gerada via Zend\Code\Generator.
 */
class Facamelhormisterio extends AbstractModel
{

    protected $vida_ministerio_id = '00000';

    protected $tempo = '2 MIN';

    protected $title = null;

    protected $publicador_id = '00000';

    protected $ajudante_id = '00000';

    protected $ponto_id = '00';

    /**
     * get vida_ministerio_id
     *
     * @return int
     */
    public function getVidaMinisterioId()
    {
        return $this->vida_ministerio_id;
    }

    /**
     * get tempo
     *
     * @return varchar
     */
    public function getTempo()
    {
        return $this->tempo;
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
     * get publicador_id
     *
     * @return int
     */
    public function getPublicadorId()
    {
        return $this->publicador_id;
    }

    /**
     * get ajudante_id
     *
     * @return int
     */
    public function getAjudanteId()
    {
        return $this->ajudante_id;
    }

    /**
     * get ponto_id
     *
     * @return int
     */
    public function getPontoId()
    {
        return $this->ponto_id;
    }

    /**
     * set vida_ministerio_id
     *
     * @return int
     */
    public function setVidaMinisterioId($vida_ministerio_id = '00000')
    {
        $this->vida_ministerio_id=$vida_ministerio_id;
        return $this;
    }

    /**
     * set tempo
     *
     * @return varchar
     */
    public function setTempo($tempo = '2 MIN')
    {
        $this->tempo=$tempo;
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
     * set ajudante_id
     *
     * @return int
     */
    public function setAjudanteId($ajudante_id = '00000')
    {
        $this->ajudante_id=$ajudante_id;
        return $this;
    }

    /**
     * set ponto_id
     *
     * @return int
     */
    public function setPontoId($ponto_id = '00')
    {
        $this->ponto_id=$ponto_id;
        return $this;
    }


}


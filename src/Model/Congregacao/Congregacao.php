<?php
/**
 * @license © 2005 - 2016 by Zend Technologies Ltd. All rights reserved.
 */


namespace Progama\Model\Congregacao;

use Base\Model\AbstractModel;

/**
 * SIGA-Smart
 *
 * Esta class foi gerada via Zend\Code\Generator.
 */
class Congregacao extends AbstractModel
{

    protected $title = null;

    protected $endereco = null;

    protected $url = null;

    protected $latitude = null;

    protected $longetude = null;

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
     * get endereco
     *
     * @return varchar
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * get url
     *
     * @return varchar
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * get latitude
     *
     * @return varchar
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * get longetude
     *
     * @return varchar
     */
    public function getLongetude()
    {
        return $this->longetude;
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
     * set endereco
     *
     * @return varchar
     */
    public function setEndereco($endereco = null)
    {
        $this->endereco=$endereco;
        return $this;
    }

    /**
     * set url
     *
     * @return varchar
     */
    public function setUrl($url = null)
    {
        $this->url=$url;
        return $this;
    }

    /**
     * set latitude
     *
     * @return varchar
     */
    public function setLatitude($latitude = null)
    {
        $this->latitude=$latitude;
        return $this;
    }

    /**
     * set longetude
     *
     * @return varchar
     */
    public function setLongetude($longetude = null)
    {
        $this->longetude=$longetude;
        return $this;
    }


}


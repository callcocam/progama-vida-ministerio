<?php
/**
 * @license © 2005 - 2016 by Zend Technologies Ltd. All rights reserved.
 */


namespace Progama\Model\Publicadores;

use Base\Model\AbstractModel;

/**
 * SIGA-Smart
 *
 * Esta class foi gerada via Zend\Code\Generator.
 */
class Publicadores extends AbstractModel
{

    protected $congregacao_id = '00000';

    protected $title = null;

    protected $gender = 'IRMÂO';

    protected $privilegio = 'Publicador';

    protected $email = null;

    protected $phone = null;

    protected $images = '';

    /**
     * get congregacao_id
     *
     * @return int
     */
    public function getCongregacaoId()
    {
        return $this->congregacao_id;
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
     * get gender
     *
     * @return varchar
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * get privilegio
     *
     * @return varchar
     */
    public function getPrivilegio()
    {
        return $this->privilegio;
    }

    /**
     * get email
     *
     * @return varchar
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * get phone
     *
     * @return varchar
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * get images
     *
     * @return varchar
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * set congregacao_id
     *
     * @return int
     */
    public function setCongregacaoId($congregacao_id = '00000')
    {
        $this->congregacao_id=$congregacao_id;
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
     * set gender
     *
     * @return varchar
     */
    public function setGender($gender = 'IRMÂO')
    {
        $this->gender=$gender;
        return $this;
    }

    /**
     * set privilegio
     *
     * @return varchar
     */
    public function setPrivilegio($privilegio = 'Publicador')
    {
        $this->privilegio=$privilegio;
        return $this;
    }

    /**
     * set email
     *
     * @return varchar
     */
    public function setEmail($email = null)
    {
        $this->email=$email;
        return $this;
    }

    /**
     * set phone
     *
     * @return varchar
     */
    public function setPhone($phone = null)
    {
        $this->phone=$phone;
        return $this;
    }

    /**
     * set images
     *
     * @return varchar
     */
    public function setImages($images = '')
    {
        $this->images=$images;
        return $this;
    }


}


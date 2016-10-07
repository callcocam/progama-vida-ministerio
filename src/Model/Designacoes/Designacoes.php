<?php
/**
 * @license © 2005 - 2016 by Zend Technologies Ltd. All rights reserved.
 */


namespace Progama\Model\Designacoes;

use Base\Model\AbstractModel;

/**
 * SIGA-Smart
 *
 * Esta class foi gerada via Zend\Code\Generator.
 */
class Designacoes extends AbstractModel
{

    protected $reuniao_id = '00000';

    protected $title = '00000';

    protected $indidacador_id = '00000';

    protected $volante_id = '00000';

    protected $tribuna_id = '00000';

    protected $som_id = '00000';

    protected $leitor_sentinela_id = '00000';

    protected $leitor_livro_id = '00000';

    /**
     * get reuniao_id
     *
     * @return int
     */
    public function getReuniaoId()
    {
        return $this->reuniao_id;
    }

    /**
     * get title
     *
     * @return int
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * get indidacador_id
     *
     * @return int
     */
    public function getIndidacadorId()
    {
        return $this->indidacador_id;
    }

    /**
     * get volante_id
     *
     * @return int
     */
    public function getVolanteId()
    {
        return $this->volante_id;
    }

    /**
     * get tribuna_id
     *
     * @return int
     */
    public function getTribunaId()
    {
        return $this->tribuna_id;
    }

    /**
     * get som_id
     *
     * @return int
     */
    public function getSomId()
    {
        return $this->som_id;
    }

    /**
     * get leitor_sentinela_id
     *
     * @return int
     */
    public function getLeitorSentinelaId()
    {
        return $this->leitor_sentinela_id;
    }

    /**
     * get leitor_livro_id
     *
     * @return int
     */
    public function getLeitorLivroId()
    {
        return $this->leitor_livro_id;
    }

    /**
     * set reuniao_id
     *
     * @return int
     */
    public function setReuniaoId($reuniao_id = '00000')
    {
        $this->reuniao_id=$reuniao_id;
        return $this;
    }

    /**
     * set title
     *
     * @return int
     */
    public function setTitle($title = '00000')
    {
        $this->title=$title;
        return $this;
    }

    /**
     * set indidacador_id
     *
     * @return int
     */
    public function setIndidacadorId($indidacador_id = '00000')
    {
        $this->indidacador_id=$indidacador_id;
        return $this;
    }

    /**
     * set volante_id
     *
     * @return int
     */
    public function setVolanteId($volante_id = '00000')
    {
        $this->volante_id=$volante_id;
        return $this;
    }

    /**
     * set tribuna_id
     *
     * @return int
     */
    public function setTribunaId($tribuna_id = '00000')
    {
        $this->tribuna_id=$tribuna_id;
        return $this;
    }

    /**
     * set som_id
     *
     * @return int
     */
    public function setSomId($som_id = '00000')
    {
        $this->som_id=$som_id;
        return $this;
    }

    /**
     * set leitor_sentinela_id
     *
     * @return int
     */
    public function setLeitorSentinelaId($leitor_sentinela_id = '00000')
    {
        $this->leitor_sentinela_id=$leitor_sentinela_id;
        return $this;
    }

    /**
     * set leitor_livro_id
     *
     * @return int
     */
    public function setLeitorLivroId($leitor_livro_id = '00000')
    {
        $this->leitor_livro_id=$leitor_livro_id;
        return $this;
    }


}


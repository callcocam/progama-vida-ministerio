<?php
/**
 * Created by PhpStorm.
 * User: Claudio
 * Date: 04/10/2016
 * Time: 18:34
 */

namespace Progama\View\Helper;


use Interop\Container\ContainerInterface;
use Progama\Model\Facamelhormisterio\Facamelhormisterio;
use Progama\Model\Facamelhormisterio\FacamelhormisterioRepository;
use Progama\Model\Tesourospalavra\Tesourospalavra;
use Progama\Model\Tesourospalavra\TesourospalavraRepository;
use Progama\Model\Vidacrista\Vidacrista;
use Progama\Model\Vidacrista\VidacristaRepository;
use Zend\View\Helper\AbstractHelper;

class ProgamaHelper extends AbstractHelper {

    protected $containerInterface;
    public function __construct(ContainerInterface $containerInterface){
        $this->containerInterface=$containerInterface;
    }

    public function readVidaCrista($id){
        $joins=null;
        if(isset($this->containerInterface->get('Config')[Vidacrista::class])){
            $joins = $this->containerInterface->get('Config')[Vidacrista::class];
        }
        $VidaCrista= $this->containerInterface->get(VidacristaRepository::class)->findBy(['vida_ministerio_id'=>$id],['id'=>"ASC"],null,null,$joins);
        if($VidaCrista->getResult()){
            return $VidaCrista->getData()->toArray();
        }
        return null;
    }

    public function readTesourosPalavra($id){
        $joins=null;
        if(isset($this->containerInterface->get('Config')[Tesourospalavra::class])){
            $joins = $this->containerInterface->get('Config')[Tesourospalavra::class];
        }
        $tesouros=$this->containerInterface->get(TesourospalavraRepository::class)->findBy(['vida_ministerio_id'=>$id],['id'=>"ASC"],null,null,$joins);
        if($tesouros->getResult()){
            return $tesouros->getData()->toArray();
        }
        return null;
    }

    public function readMelhorMinisterio($id){
        $joins=null;
        if(isset($this->containerInterface->get('Config')[Facamelhormisterio::class])){
            $joins = $this->containerInterface->get('Config')[Facamelhormisterio::class];
        }
        $MelhorMinisterio=$this->containerInterface->get(FacamelhormisterioRepository::class)->findBy(['vida_ministerio_id'=>$id],['id'=>"ASC"],null,null,$joins);
        if($MelhorMinisterio->getResult()){
            return $MelhorMinisterio->getData()->toArray();
        }
        return null;
    }


} 
<?php
/**
 * Created by PhpStorm.
 * User: Claudio
 * Date: 03/10/2016
 * Time: 09:00
 */

namespace Progama;


use Progama\View\Helper\ProgamaHelperFactory;
use Zend\ModuleManager\Feature\ConfigProviderInterface;
use Zend\ModuleManager\Feature\ViewHelperProviderInterface;

class Module implements ConfigProviderInterface, ViewHelperProviderInterface{

    /**
     * Returns configuration to merge with application configuration
     *
     * @return array|\Traversable
     */
    public function getConfig()
    {
        return include __DIR__.'/../config/module.config.php';
    }


    /**
     * Expected to return \Zend\ServiceManager\Config object or array to
     * seed such an object.
     *
     * @return array|\Zend\ServiceManager\Config
     */
    public function getViewHelperConfig()
    {
        return [
            'factories'=>[
                "ProgamaHelper"=>ProgamaHelperFactory::class
            ]
        ];
    }
}
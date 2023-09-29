<?php namespace Solka\Domains;

use System\Classes\PluginBase;
use Solka\Domains\Classes\Domain;

use request;
use Solka\Domains\Classes\Location;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return[
        'solka\domains\components\Multidomen'=>'mulridomen',
        'solka\domains\components\Title'=>'Title'
        ];
    }

    public function registerSettings()
    {
    }
   
    public function boot(){
        // получаешь домен
        //Location::getLocation();
        

    }
}

<?php namespace Solka\Domains\Components;

use Cms\Classes\ComponentBase;
use Solka\Domains\Classes\Domain;
use Solka\Domains\Models\Title as TL;

class Title extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'title Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }



    public function onRun(){ 
       
        $domain = Domain::getDomain();
        if($domain){
            $this->page['titles'] = TL::whereHas('cities', function($q) {
                $domain = Domain::getDomain();
                $q->where('domain', '=', $domain);
            })->get();
        
        }else{
            $this->page['ne_titles']= TL::whereHas('cities', function($q) {
                $domain = Domain::getDomain();
                $q->where('domain', '=', 'all');
            })->get();
           
        }


       
        
      
    }
}

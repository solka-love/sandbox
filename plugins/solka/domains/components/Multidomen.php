<?php namespace Solka\Domains\Components;

use Cms\Classes\ComponentBase;
use Solka\Domains\Classes\Domain;
use Solka\Domains\Models\Item;
use Solka\Domains\Models\City;

class Multidomen extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Multidomen Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        
        return[];
       
    }


    public function onRun(){ 
        if($this->page->id == 'service'){
            $domain = Domain::getDomain();
            if($domain){
                $this->page['posts'] = Item::whereHas('cities', function($q) {
                    $domain = Domain::getDomain();
                    $q->where('domain', '=', $domain);
                })->get();
            }else{
                $this->page['posts'] = Item::Published()->get();
            }

        } elseif($this->page->id == 'items_page'){
            $this->page['item'] = Item::Published()->where('slug', $this->param('slug_post'))->first();
     
        }
    }
}

<?php namespace Solka\Domains\Models;

//use Illuminate\Database\Eloquent\Relations\BelongsToMany;

use Illuminate\Support\Facades\DB;
use Model;
//use request;
use Solka\Domains\Classes\Domain;
use Solka\Domains\Controllers\Domes_control;

//use Solka\Domains\Controllers\Items;

/**
 * Model
 */
class Item extends Model
{
    use \October\Rain\Database\Traits\Validation;
    


    use \October\Rain\Database\Traits\Sluggable;
    /** 
     * @var array Generate slugs for these attributes.
    */protected $slugs = ['slug' => 'name'];


    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;
    protected  $fillable = ['item'];




    /**
     * @var string The database table used by the model.
     */
    public $table = 'solka_domains_services_item';


   

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    
    
    public $attachOne = ['cover'=>'System\Models\File'];
    
    public $belongsToMany = [
        'cities' => [\Solka\Domains\Models\City::class, 'table'=>'solka_item_city']
    ];

    

    public function scopePublished($query){
        $query->where('is_published', true);

    }





}



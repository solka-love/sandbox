<?php namespace Solka\Domains\Models;

use Model;

/**
 * Model
 */
class Title extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'solka_domains_title';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];




    public $belongsToMany = [
        'cities' => [\Solka\Domains\Models\City::class, 'table'=>'solka_title_city']
    ];




    public function scopePublished($query){
        $query->where('is_published', true);
    }
}

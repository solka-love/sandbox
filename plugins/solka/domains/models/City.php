<?php namespace Solka\Domains\Models;

use Model;

/**
 * Model
 */
class City extends Model
{
    use \October\Rain\Database\Traits\Validation;



    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    protected $fillable = ['city'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'solka_domains_citys';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    

    public $belongsToMany = [
        'items' => [\Solka\Domains\Models\Item::class, 'table'=>'solka_item_city'],
        'title' => [\Solka\Domains\Models\Title::class, 'table'=>'solka_title_city']
    ];







}

<?php namespace Solka\Message\Models;

use Model;

/**
 * Model
 */
class Messages extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'solka_message_';

    protected $fillable = ['first_name', 'last_name', 'email', 'phone', 'message'];

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    // public $belongsToMany = [
    //     'citys' => [\Solka\Domains\Models\City::class, 'table'=>'solka_tags_table']
    // ];
}

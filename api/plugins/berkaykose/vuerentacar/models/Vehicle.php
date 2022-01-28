<?php namespace Berkaykose\Vuerentacar\Models;

use Model;

/**
 * Model
 */
class Vehicle extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /* Relations */

    public $belongsToMany = [
        'locations' => [
            'Berkaykose\Vuerentacar\Models\Location',
            'table' => 'berkaykose_vuerentacar_vhc_lct',
            'order' => 'title'
        ],
        'dates' => [
            'Berkaykose\Vuerentacar\Models\Date',
            'table' => 'berkaykose_vuerentacar_vehicles_dates',
            'order' => 'pickup'
        ]
    ];

    public $attachOne = [
        'image' => 'System\Models\File'
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'berkaykose_vuerentacar_vehicles';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}

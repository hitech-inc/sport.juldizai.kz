<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Teammate
 * @package App\Models
 * @version April 24, 2018, 11:50 am UTC
 *
 * @property string name
 * @property string occupation
 * @property string img
 */
class Teammate extends Model
{
    use SoftDeletes;

    public $table = 'teammates';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'occupation',
        'img'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'occupation' => 'string',
        'img' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'occupation' => 'required',
        'img' => 'required'
    ];

    
}

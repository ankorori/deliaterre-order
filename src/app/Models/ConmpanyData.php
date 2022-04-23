<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class ConmpanyData
 * @package App\Models
 * @version April 9, 2022, 10:39 pm JST
 *
 * @property string $name
 * @property string $postlcode
 * @property string $streetaddress
 * @property string $phonenumber
 * @property string $faxnumber
 */
class ConmpanyData extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'conmpany_datas';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'postlcode',
        'streetaddress',
        'phonenumber',
        'faxnumber'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'postlcode' => 'string',
        'streetaddress' => 'string',
        'phonenumber' => 'string',
        'faxnumber' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|max:30',
        'postlcode' => 'required|max:8',
        'streetaddress' => 'required|max:50',
        'phonenumber' => 'required|max:13',
        'faxnumber' => 'required|max:13'
    ];

    
}

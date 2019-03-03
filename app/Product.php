<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{	
    static $rules = [
            'name' => 'required|max:255|unique:products',
            'price' => 'required'
        ];
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'price',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    // protected $hidden = [
    //     'id',
    // ];
}

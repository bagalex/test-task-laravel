<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'application_id', 'countries', 'payout', 'platform'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'countries' => 'array'
    ];

    protected $primaryKey = 'application_id';
}

<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Widget extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'widget_json', 'dashboard_id',
    ];

}

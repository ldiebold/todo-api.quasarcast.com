<?php

namespace App\Models;

use App\Scopes\RequestersUuidScope;
use Cookie;
use Illuminate\Database\Eloquent\Model;
use Response;

class ScopesToRequestUuidModel extends Model
{
    public static function boot()
    {
        static::creating(function ($model) {
            if (!app()->runningInConsole()) {
                $model->uuid = request()->cookie('uuid');
            }
        });

        parent::boot();
    }

    /**
     * The "booted" method of the model.
     *
     * @return void
     */
    protected static function booted()
    {
        if (!app()->runningInConsole()) {
            static::addGlobalScope(new RequestersUuidScope);
        };
    }

    protected $hidden = [
        'uuid'
    ];

    protected $guarded = [
        'uuid'
    ];
}

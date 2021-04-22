<?php

namespace App\Models;

use App\Scopes\RequestersIpScope;
use Illuminate\Database\Eloquent\Model;

class ScopesToRequestIpModel extends Model
{
    public static function boot()
    {
        static::creating(function ($model) {
            if (!app()->runningInConsole()) {
                $model->ip = request()->ip();
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
            static::addGlobalScope(new RequestersIpScope);
        };
    }

    protected $hidden = [
        'ip'
    ];

    protected $guarded = [
        'ip'
    ];
}

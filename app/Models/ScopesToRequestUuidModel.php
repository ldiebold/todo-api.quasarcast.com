<?php

namespace App\Models;

use App\Scopes\RequestersUuidScope;
use Illuminate\Database\Eloquent\Model;

class ScopesToRequestUuidModel extends Model
{
    public static function boot()
    {
        static::creating(function ($model) {
            if (!app()->runningInConsole()) {
                $model->uuid = '4ea18674-e00d-4bdd-9650-c6f00d62cefe';
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

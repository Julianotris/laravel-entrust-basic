<?php

namespace App\Model\InventoryApp;

use Illuminate\Database\Eloquent\Model;

class Skpd extends Model
{
    protected $connection = 'mysql2';

    protected $table = 'skpd';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username'
    ];
}

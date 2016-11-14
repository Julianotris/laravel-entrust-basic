<?php

namespace App\Model\Egratifikasi;

use Illuminate\Database\Eloquent\Model;

class Objek extends Model
{
    protected $connection = 'mysql3';

    protected $table = 'default_gratifikasi_objek';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

    /**
    * Relation with laporan.
    */
    public function laporan()
    {
        return $this->belongsTo('App\Model\Egratifikasi\Laporan');
    }
}

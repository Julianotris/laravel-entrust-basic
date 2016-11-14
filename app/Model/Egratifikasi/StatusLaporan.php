<?php

namespace App\Model\Egratifikasi;

use Illuminate\Database\Eloquent\Model;

class StatusLaporan extends Model
{
    protected $connection = 'mysql3';

    protected $table = 'default_workflow_state';

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
        return $this->hasMany('App\Model\Egratifikasi\Laporan');
    }
}

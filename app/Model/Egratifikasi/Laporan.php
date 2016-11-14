<?php

namespace App\Model\Egratifikasi;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    protected $connection = 'mysql3';

    protected $table = 'default_gratifikasi_laporan';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'peristiwa', 'tempat', 'nama_pemberi', 'pekerjaan_pemberi', 'alasan'
    ];

    /**
    * Relation with Pelapor.
    */
    public function pelapor()
    {
        return $this->belongsTo('App\Model\Egratifikasi\Pelapor', 'id_pelapor');
    }

    /**
    * Relation with objek.
    */
    public function objek()
    {
        return $this->hasOne('App\Model\Egratifikasi\Objek', 'id_laporan');
    }

    /**
    * Relation with status.
    */
    public function statusLaporan()
    {
        return $this->belongsTo('App\Model\Egratifikasi\StatusLaporan', 'jenis');
    }
}

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
}

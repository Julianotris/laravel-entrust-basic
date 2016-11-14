<?php

namespace App\Model\Egratifikasi;

use Illuminate\Database\Eloquent\Model;

class Pelapor extends Model
{
    protected $connection = 'mysql3';

    protected $table = 'default_human_resource_personel';

    /**
     * Get the comments for the blog post.
     */
    public function laporan()
    {
        return $this->hasMany('App\Model\Egratifikasi\Laporan');
    }


}

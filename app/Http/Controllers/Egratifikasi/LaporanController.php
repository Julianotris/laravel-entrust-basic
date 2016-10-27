<?php

namespace App\Http\Controllers\Egratifikasi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests;
use App\Model\Egratifikasi\Laporan;

class LaporanController extends Controller
{
    /**
     * Get list Laporan Egratifikasi
     *
     * @return resource view
     */
    public function getListLaporan()
    {
        $laporan = Laporan::all();
        dd($laporan);
        //return view('inventory.dashboard', compact('count_apps', 'count_skpd'));

    }
}

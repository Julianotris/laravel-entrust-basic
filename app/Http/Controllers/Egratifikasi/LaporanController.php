<?php

namespace App\Http\Controllers\Egratifikasi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests;
use App\Model\Egratifikasi\Laporan;
use App\Http\Traits\Egratifikasi\LaporanTrait;
use App\Http\Traits\Egratifikasi\UserTrait;

use Datatables;

class LaporanController extends Controller
{
    use LaporanTrait, UserTrait;

    /**
     * Get list Laporan Egratifikasi
     *
     * @return resource view
     */
    public function getListLaporan()
    {
        $count_laporan = $this->countLaporan();
        $count_user = $this->countUser();
        $count_status = $this->countStatus();
        $count_jenis = $this->countJenis();

        return view('egratifikasi.dashboard', compact('count_laporan', 'count_user', 'count_status', 'count_jenis'));
    }

    /**
     * Get datatable list laporan
     *
     * @return resource view
     */
    public function getAplikasiDatatable()
    {
        $laporan = $this->getAllLaporan();

        return Datatables::of($laporan)->make(true);

    }

    /**
     * Get json Datatable status laporan (count group by status)
     *
     * @return resource view
     */

    public function getStatusDatatable()
    {
        $status = $this->countLaporanByStatus();

        return Datatables::of($status)->make(true);

    }

    /**
     * Get json Datatable jenis laporan (count group by jenis)
     *
     * @return resource view
     */

    public function getJenisDatatable()
    {
        $jenis = $this->countLaporanByJenis();

        return Datatables::of($jenis)->make(true);

    }

    /**
     * Get list User Egratifikasi
     *
     * @return resource view
     */
    public function getUserDatatable()
    {
        $users = $this->getAllUser();

        return Datatables::of($users)->make(true);
    }
}

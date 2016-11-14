<?php
namespace App\Http\Traits\Egratifikasi;

use DB;
use App\Model\Egratifikasi\Laporan;
use App\Model\Egratifikasi\Objek;
use App\Model\Egratifikasi\StatusLaporan;

trait LaporanTrait {

    public function getAllLaporan2()
    {
        return Laporan::with(['pelapor', 'objek']);
    }

    public function getAllLaporan()
    {
        $laporan = DB::connection('mysql3')
                ->table('default_gratifikasi_laporan')
                ->select(
                    'default_gratifikasi_laporan.*',
                    'default_gratifikasi_objek.jenis',
                    'default_gratifikasi_objek.harga',
                    'default_human_resource_personel.nama_lengkap',
                    'default_workflow_state.name as status_name')
                ->join('default_gratifikasi_objek', 'default_gratifikasi_laporan.id', '=', 'default_gratifikasi_objek.id_laporan')
                ->join('default_human_resource_personel', 'default_human_resource_personel.id', '=', 'default_gratifikasi_laporan.id_pelapor')
                ->join('default_workflow_state', 'default_workflow_state.id', '=', 'default_gratifikasi_laporan.status');
        return $laporan;
    }

    public function countLaporan( $jenis = 'all')
    {
        return Laporan::count();
    }

    public function countJenis()
    {
        return Objek::select(DB::raw('count(Distinct jenis) as total'))->first()->total;
    }

    public function countStatus()
    {
        return StatusLaporan::count();
    }

    public function countLaporanByStatus() {

        $status = DB::connection('mysql3')
                ->table('default_gratifikasi_laporan')
                ->select(
                    'default_workflow_state.name',
                    DB::raw('count(default_gratifikasi_laporan.id) as jumlah'))
                ->join('default_workflow_state', 'default_workflow_state.id', '=', 'default_gratifikasi_laporan.status')
                ->groupBy('default_gratifikasi_laporan.status');

        return $status;
    }

    public function countLaporanByJenis() {

        $jenis = DB::connection('mysql3')
                ->table('default_gratifikasi_objek')
                ->select(
                    'default_gratifikasi_objek.jenis',
                    DB::raw('count(default_gratifikasi_laporan.id) as jumlah'))
                ->leftJoin('default_gratifikasi_laporan', 'default_gratifikasi_laporan.id', '=', 'default_gratifikasi_objek.id_laporan')
                ->groupBy('default_gratifikasi_objek.jenis');

        return $jenis;
    }
}

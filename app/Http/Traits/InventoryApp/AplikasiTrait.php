<?php
namespace App\Http\Traits\InventoryApp;

use DB;
use App\Model\InventoryApp\AplikasiBdg as Aplikasi;

trait AplikasiTrait {

    public function getAllAplikasi() {

        return Aplikasi::all();
    }

    public function getAplikasiBdg() {

        return Aplikasi::where('jenis', '=', 'web')->get();
    }


    public function countAplikasiBdg($alltype = true, $jenis = 'all') {

        if ($alltype) {
            return Aplikasi::select(
                DB::raw(
                    "COUNT(id) as count_application,
                    COUNT(DISTINCT jenis) as count_jenis,
                    COUNT(DISTINCT status) as count_status,
                    SUM(nilai_pengadaan) as total_pengadaan,
                    COUNT(DISTINCT kepemilikan) as count_kepemilikan"
                )
            )->first();
        }

        if ($jenis == 'all') {
            return Aplikasi::count();
        } else {
            return Aplikasi::where('jenis', '=', $jenis)->count();
        }
    }

    public function getJenis() {

        return Aplikasi::select('id', 'jenis as jenis', DB::raw('count(id) as jumlah_aplikasi'), DB::raw('sum(nilai_pengadaan) as nilai_pengadaan'))->groupBy('jenis')->get();
    }

    public function getStatus() {

        return Aplikasi::select('id', 'status as status',
                        DB::raw('count(id) as jumlah_aplikasi'),
                        DB::raw('sum(nilai_pengadaan) as nilai_pengadaan'))
                ->groupBy('status')->get();
    }


}
<?php
namespace App\Http\Traits\InventoryApp;

use DB;
use App\Model\InventoryApp\Skpd;

trait SkpdTrait {

    public function getAllSkpd() {

        return Skpd::all();
    }

    public function countSkpd( $jenis = 'all') {

        if ($jenis == 'all') {
            return SKPD::count();
        } else {
            return SKPD::where('jenis_lembaga', '=', $jenis)->count();
        }
    }
}

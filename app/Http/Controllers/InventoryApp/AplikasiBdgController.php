<?php

namespace App\Http\Controllers\InventoryApp;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests;

use App\Model\InventoryApp\AplikasiBdg as Aplikasi;
use App\Model\InventoryApp\Skpd;

use App\Http\Traits\InventoryApp\AplikasiTrait;
use App\Http\Traits\InventoryApp\SkpdTrait;
use App\Http\Traits\InventoryApp\UserTrait;


use Datatables;

class AplikasiBdgController extends Controller
{
    use AplikasiTrait, SkpdTrait, UserTrait;

    /**
     * Get list APP Bandung
     *
     * @return resource view
     */
    public function getListApp()
    {
        $count_app = array();
        $count_apps = $this->countAplikasiBdg(true);
        $count_skpd = $this->countSKPD('all');
        $count_user = 50;

        return view('inventory.dashboard', compact('count_apps', 'count_skpd'));

    }

    /**
     * Get json Datatable all aplikasi
     *
     * @return resource view
     */

    public function getAplikasiDatatable()
    {
        $app_lists = $this->getAllAplikasi();

        return Datatables::of($app_lists)->make(true);

    }

    /**
     * Get json Datatable jenis aplikasi (count group by jenis)
     *
     * @return resource view
     */

    public function getJenisDatatable()
    {
        $jenis = $this->getJenis();

        return Datatables::of($jenis)->make(true);

    }

    /**
     * Get json Datatable jenis aplikasi (count group by status)
     *
     * @return resource view
     */

    public function getStatusDatatable()
    {
        $status = $this->getStatus();

        return Datatables::of($status)->make(true);

    }

    /**
     * Get list SKPD Bandung
     *
     * @return resource view
     */

    public function getSkpdDatatable()
    {
        $skpd_lists = $this->getAllSkpd();

        return Datatables::of($skpd_lists)->make(true);

    }

    /**
     * Get list User Inventory
     *
     * @return resource view
     */

    public function getUserDatatable()
    {
        $users = $this->getAllUser();

        return Datatables::of($users)->make(true);

    }
}

<?php
namespace App\Http\Traits\InventoryApp;

use DB;
use App\Model\InventoryApp\User;

trait UserTrait {

    public function getAllUser()
    {
        return User::all();
    }

    public function countUser( $jenis = 'all')
    {
        return User::count();
    }
}

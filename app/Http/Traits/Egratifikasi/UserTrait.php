<?php
namespace App\Http\Traits\Egratifikasi;

use DB;
use App\Model\Egratifikasi\User;

trait UserTrait {

    public function getAllUser()
    {
        return User::select('username', 'email');
    }

    public function countUser()
    {
        return User::count();
    }
}

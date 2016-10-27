<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;
use Datatables;
use DB;

class UsersController extends Controller
{
    public function index()
    {
        return view('user-management.user');
    }

    public function getData()
    {
        $users = User::select(
                     'users.id',
                     'users.name as users_name',
                     'users.email',
                     'roles.name')
                ->join('role_user', 'users.id', '=', 'role_user.user_id')
                ->join('roles', 'roles.id', '=', 'role_user.role_id');

        return Datatables::of($users)
            ->add_column('action', function($user) {
                $action = '<a href="user/' . $user->id . '"> Edit </a> &nbsp;';
                $action .= '<a href="user/' . $user->id . '"> Delete </a>';
                return $action;
            })
            ->make(true);
    }
}

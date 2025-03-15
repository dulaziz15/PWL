<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $data = [
            'level_id' => 2,
            'username' => 'manager_tiga', 
            'nama' => 'Manager 3',
            'password' => Hash::make('1234')
        ];
        UserModel::create($data);

        $user = UserModel::all();
        return view('user.index', ['data' => $user]);
    }
}

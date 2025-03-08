<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index($id, $user) {
        return view('user.index')
            ->with('id', $id)
            ->with('name', $user);
    }
}

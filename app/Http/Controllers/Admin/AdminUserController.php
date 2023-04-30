<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ParentController;
use App\Models\User;
use Illuminate\Http\Request;

class AdminUserController extends ParentController
{
    public function index()
    {
        $response['user_data'] = User::all();
        return view('pages.admin.users.index')->with($response);
    }
}

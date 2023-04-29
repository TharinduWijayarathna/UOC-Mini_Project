<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ParentController;
use Illuminate\Http\Request;

class AdminHomeController extends ParentController
{
    public function index()
    {
        return view('pages.admin.dashboard.index');
    }
}

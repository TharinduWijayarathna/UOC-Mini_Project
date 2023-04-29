<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends ParentController
{
    public function index()
    {
        $user = Auth::user();

        if($user->user_type == 0){
            return redirect()->route('admin.dashboard.index');
        }
        // else if($user->user_type == 1){
        //     return redirect()->route('cashier.dashboard.index');
        // }else if($user->user_type == 2){
        //     return redirect()->route('customer.dashboard.index');
        // }
    }

    public function register()
    {
        return view('auth.register');
    }
}

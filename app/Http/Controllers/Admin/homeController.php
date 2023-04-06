<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function userData(Request $request)
    {
        $userData = Order::get();
        return view('admin.userdata', compact('userData'));
    }
}

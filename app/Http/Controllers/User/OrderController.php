<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;


class OrderController extends Controller
{
    function index(){
        return view('user.order.index');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RolesController extends Controller
{
    function index(){
        $roles = Role::all();
        return view('admin.roles.index', compact('roles'));
    }
}

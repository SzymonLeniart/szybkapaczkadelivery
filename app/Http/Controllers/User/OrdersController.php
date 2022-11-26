<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Middleware\Authenticate;
use App\Models\Paczkas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Models\Adresats;
use App\Models\Odbiorcas;
use App\Models\Przesylkas;
use Illuminate\Support\Facades\Auth;

class OrdersController extends Controller
{
    function index(){
        $orders = Przesylkas::all()->where('users_id', Auth::user()->id);
        $adresats = Adresats::all()->where('users_id', Auth::user()->id);
        $odbiorcas = DB::table('przesylkas')->join('odbiorcas', 'odbiorcas.id', '=', 'przesylkas.odbiorcas_id')->select('odbiorcas.*', 'przesylkas.*')->get();
        $id = Auth::id();
        return view('user.orders.index', compact('orders'), compact('adresats' , 'odbiorcas'));
    }
    

    public function store(Request $request){
        
        
        

        Przesylkas::create([
        'waga' => $request->nr_l,
        'szerokosc' => $request->szerokosc,
        'dlugosc' => $request->dlugosc,
        'wysokosc' => $request->wysokosc,
        'adres_dostawy' => $request->adres_dostawy,
        'odbiorca' => $request->odbiorca,
        'users_id' => $request->user()->id

        
        ]);
        return redirect(route('user.order.index'));
        
    }
}

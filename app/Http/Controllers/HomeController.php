<?php

namespace App\Http\Controllers;

use App\Models\Favorito;
use Illuminate\Http\Request;
use App\Models\Prenda;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $email = Auth::user()->email;
        $id_prendas = Favorito::select('id_prenda')->where('email','=',$email)->distinct()->get()->pluck('id_prenda')->toArray();
        $prendas = Prenda::whereIn('id',$id_prendas)->get();
        return view('home', ['prendas'=>$prendas]);
    }
}

<?php

namespace App\Http\Controllers;

use App\User;
use App\Habitacion;
use Illuminate\Http\Request;

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
        //dd('aqui');

        $habitaciones = Habitacion::all();

        $users = User::count();

        $widget = [
            'users' => $users,

            //...
        ];


        return view('home', compact('widget', 'habitaciones') );

    }
}

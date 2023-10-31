<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function index()
    {
        $trains = Train::all();

        return view('home', ['trains' => $trains]);
    }
}

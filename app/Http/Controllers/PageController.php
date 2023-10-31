<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{

    public function home()
    {

        $trains = Train::all();

        return view('home', ['trains' => $trains]);
    }
}

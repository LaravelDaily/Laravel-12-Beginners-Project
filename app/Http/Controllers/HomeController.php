<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $categories = DB::table('categories')->get();
        return view('home', ['categories' => $categories]);
    }
}

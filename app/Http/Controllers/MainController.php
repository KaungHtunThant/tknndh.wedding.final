<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wishes;

class MainController extends Controller
{
    public function index(Request $request)
    {
        $wishes = Wishes::all();
        return view('index_final')
            ->with('wishes', $wishes);
    }
}

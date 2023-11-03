<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RsvpLists;
use App\Models\Wishes;
use Illuminate\Support\Facades\Session;

class RSVPController extends Controller
{
    public function index(Request $request)
    {
        $rsvp = RsvpLists::all();
        $wish = Wishes::all();

        return view('admin.index')
            ->with('rsvp', $rsvp)
            ->with('wish', $wish);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'status' => 'required',
            'extra' => 'required',
        ]);

        $response = RsvpLists::create($request->all());

        Session::put('rsvp', 'true');
        return redirect('/home');
    }
}
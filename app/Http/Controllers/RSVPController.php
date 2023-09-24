<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RsvpLists;

class RSVPController extends Controller
{
    public function index(Request $request)
    {
        $rsvp = RsvpLists::all();

        return view('admin.index')
            ->with('rsvp', $rsvp);
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

        // SESSION::
        return redirect('/');
    }
}
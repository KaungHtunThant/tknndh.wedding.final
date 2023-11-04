<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RsvpLists;
use Illuminate\Support\Facades\Session;

class RSVPController extends Controller
{
    public function index(Request $request)
    {
        $page = 1;
        if (isset($request->page)) {
            $page = $request->page;
        }
        $rsvp = RsvpLists::orderby('id', 'DESC')->paginate(10);
        $total = RsvpLists::sum('extra');

        return view('admin.index')
            ->with('rsvp', $rsvp)
            ->with('total', $total)
            ->with('page', $page);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'status' => 'required',
            'extra' => 'required',
        ]);

        if ($request->status == '0') {
            $extra = 0;
        }
        else{
            $extra = $request->extra;
        }

        $response = RsvpLists::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'status' => $request->status,
            'extra' => $extra
        ]);

        Session::put('rsvp', 'true');
        return redirect('/home');
    }
}
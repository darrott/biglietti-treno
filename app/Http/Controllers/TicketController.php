<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Ticket;

use Auth;

class TicketController extends Controller
{
    public function index(){
        if (!Auth::check()) return redirect()->route('home');
        $currentUserId = Auth::user()->id;

        $tickets = Ticket::where('user_id', $currentUserId)->get();

        return view('tickets.index', compact('tickets'));
    }
}

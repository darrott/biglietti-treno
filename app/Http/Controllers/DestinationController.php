<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Destination;

class DestinationController extends Controller
{
  public function index(){
    $destinations = Destination::orderBy('id', 'desc')->paginate(5);

    return view('destinations.index', compact('destinations'));
  }

  public function create(){
    return view('destinations.create');
  }

  public function store(Request $request){
    $request->validate([
      'name' => 'required',
    ]);

    Destination::create($request->post());

    return redirect()->route('destinations.index')->with('success', 'Destination Added');
  }

  public function edit(Destination $destination){
    return view('destinations.edit', compact('destination'));
  }

  public function update(Request $request, Destination $destination){
    $request->validate([
      'name' => 'required',
    ]);

    $destination->fill($request->post())->save();

    return redirect()->route('destinations.index')->with('success', 'Destination Modified');
  }

  public function destroy(Destination $destination){
    $destination->delete();
    return redirect()->route('destinations.index')->with('success', 'Destination Deleted');
  }
}

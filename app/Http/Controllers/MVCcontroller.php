<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Motehingar;

class MVCcontroller extends Controller
{
    public function index() {
        $motehingars = Motehingar::all();

        return view('motehingars.index', ['motehingars'=>$motehingars]);
    }

    public function store() {
        $motehingar = new Motehingar();
        $motehingar->name = request('name');
        $motehingar->noodle = request('noodle');
        $motehingar->flavour = request('flavour');
        $motehingar->toppings = request('toppings');
        $motehingar->save();

        return redirect('/')->with('msg', 'you successfully ordered motehingar');
    }

    public function show($id) {
        $motehingar = Motehingar::findOrFail($id);

        return view('motehingars.show', ['motehingar'=>$motehingar]);
    }

    public function create() {
        return view('motehingars.create');
    }

    public function destroy($id) {
        $motehingar = Motehingar::findOrFail($id);
        $motehingar->delete();

        return redirect('/motehingars');
    }
}

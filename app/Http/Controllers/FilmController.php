<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    //
    public function index()
    {
        return view ('film.index',[
            'films' => Film::get()
        ]);
    }

    public function create (Request $request){
        return view ('film.form');        
    }

    public function store (Request $request){
        $inputs = $request->only(['judul', 'tahun_rilis']);
        $create = Film::create($inputs);

        if($create){
            return redirect()->route('film.index');
        }

        return abort(500);
    }

    public function edit ($id){
        $film = Film::find($id); 
        return view ('film.form', [
            'film' => $film
        ]);    
    }

    public function update (Request $request, $id){
        $inputs = $request->only(['judul', 'tahun_rilis']);
        $film = Film::find($id);
        $update = $film->update($inputs);

        if($update){
            return redirect()->route('film.index');
        }

        return abort(500);
    }

    public function destroy ($id){
        $film = Film::find($id);
        $delete = $film->delete();

        if($delete){
            return redirect()->route('film.index');
        }

        return abort(500);
    }
}
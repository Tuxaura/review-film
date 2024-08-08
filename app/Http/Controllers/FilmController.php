<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\Genre;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function index()
    {
        $films = Film::with('genre')->get();
        return view('films.index', compact('films'));
    }

    public function create()
    {
        $genres = Genre::all();
        return view('films.create', compact('genres'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'genre_id' => 'required|exists:genres,id',
        ]);

        Film::create($request->all());
        return redirect()->route('films.index');
    }

    public function edit(Film $film)
    {
        $genres = Genre::all();
        return view('films.edit', compact('film', 'genres'));
    }

    public function update(Request $request, Film $film)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'genre_id' => 'required|exists:genres,id',
        ]);

        $film->update($request->all());
        return redirect()->route('films.index');
    }

    public function show(Film $film)
    {
        return view('films.show', compact('film'));
    }

    public function destroy(Film $film)
    {
        $film->delete();
        return redirect()->route('films.index');
    }
}

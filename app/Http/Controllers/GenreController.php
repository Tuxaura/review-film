<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use App\Models\Genre;
use Illuminate\Http\Request;


class GenreController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {
        $genres = Genre::all();
        return view('genres.index', compact('genres'));
    }

    public function create()
    {
        return view('genres.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Genre::create($request->all());
        return redirect()->route('genres.index');
    }

    public function edit(Genre $genre)
    {
        return view('genres.edit', compact('genre'));
    }

    public function update(Request $request, Genre $genre)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $genre->update($request->all());
        return redirect()->route('genres.index');
    }

    public function show(Genre $genre)
    {
        $films = $genre->films;
        return view('genres.show', compact('genre', 'films'));
    }

    public function destroy(Genre $genre)
    {
        $genre->delete();
        return redirect()->route('genres.index');
    }

   

}

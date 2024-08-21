<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies = Movie::all();
        return view('index')->with('movies', $movies);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'title' => 'required',
        //     'director' => 'required',
        //     'year' => 'required|integer',
        // ]);

        // Movie::create($request->all());
        // return redirect()->route('movies.index')->with('success', 'Movie added successfully.');

        $input = $request->all();
        Movie::create($input);
        return redirect('movies')->with('success', 'Movie added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $movies = Movie::find($id);
        return view('show')->with('Movies', $movies);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $movies = Movie::find($id);
        return view('edit')->with('Movies', $movies);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $movies = Movie::find($id);
        $input = $request->all();
        $movies->update($input);
        return redirect('movies')->with('flash_message', 'Movies Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Movie::destroy($id);
        return redirect('movies')->with('flash_message', 'Movies deleted!'); 
    }
}

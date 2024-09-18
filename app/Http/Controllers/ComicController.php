<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();

        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $new_comic = new Comic;

        $new_comic->fill($data);
        $new_comic->save();

        // $new_comic->title = $data['title'];
        // $new_comic->description = $data['description'];
        // $new_comic->thumb = $data['thumb'];
        // $new_comic->price = $data['price'];
        // $new_comic->series = $data['series'];
        // $new_comic->sale_date = $data['sale_date'];
        // $new_comic->type = $data['type'];
        // $new_comic->save();

        return redirect()->route('comics.show', $new_comic);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comic = Comic::find($id);

        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $comic = Comic::find($id);

        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $data = $request->all();

        $edit_comic = Comic::find($id);

        $edit_comic->fill($data);
        $edit_comic->save();
        // $edit_comic->title = $data['title'];
        // $edit_comic->description = $data['description'];
        // $edit_comic->thumb = $data['thumb'];
        // $edit_comic->price = $data['price'];
        // $edit_comic->series = $data['series'];
        // $edit_comic->sale_date = $data['sale_date'];
        // $edit_comic->type = $data['type'];
        // $edit_comic->save();

        // dd($data);
        return redirect()->route('comics.show', $edit_comic);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $comic = Comic::find($id);

        $comic->delete();

        return redirect()->route('comics.index');
    }
}

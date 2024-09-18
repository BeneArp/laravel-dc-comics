<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;
use App\Http\Requests\ComicRequest;

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

        $request->validate([
            'title' => 'required|min:3',
            'description' => 'required|min:3',
            'thumb' => 'required',
            'price' => 'required|min:2|max:10',
            'series' => 'required|min:3|max:50',
            'sale_date' => 'required|date',
            'type' => 'required|min:3|max:50'
        ],[
            'title.required' => 'Il titolo è un campo obbligatorio',
            'title.min' => 'Il titolo deve contenere almeno :min caratteri',
            'description.required' => 'La descrizione è un campo obbligatorio',
            'description.min' => 'La descrizione deven contenere almeno :min caratteri',
            'thumb.required' => 'L\'immagine è un campo obbligatorio',
            'price.required' => 'Il prezzo è un campo obbligatorio',
            'price.min' => 'Il prezzo deve contenere almeno :min caratteri',
            'price:max' => 'Il prezzo può contenere al massimo :max caratteri',
            'series.required' => 'La serie è un campo obbligatorio',
            'series.min' => 'La serie deve contenere almeno :min caratteri',
            'series.max' => 'La serie può contenere al massimo :max caratteri',
            'sale_date.required' => 'La data è un campo obbligatorio',
            'sale_date.date' => 'Inserie una data aaaa-mm-gg',
            'type.required' => 'Il tipo è un campo obbligatorio',
        ]);

        $data = $request->all();

        $new_comic = new Comic;

        $new_comic->fill($data);
        $new_comic->save();

        return redirect()->route('comics.show', $new_comic);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comic = Comic::find($id);

        if(!isset($comic)){
            abort(404);
        }

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
    public function update(ComicRequest $request, string $id)
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

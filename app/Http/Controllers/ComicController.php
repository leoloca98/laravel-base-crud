<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;
use Illuminate\Support\Str;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()  //! INDEX --------------------------------------------------------------------------------------------------------------------------
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()    //! CREATE --------------------------------------------------------------------------------------------------------------------------
    {
        return view('comics.create', ['comic' => new Comic()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) //! STORE --------------------------------------------------------------------------------------------------------------------------
    {
        //# Validazione
        $request->validate(
            [
                'title' => 'required|string|unique:comics|min:5',
                'description' => 'required|string|min:5',
                'thumb' => 'required|string|unique:comics|min:5',
                'price' => 'required|integer',
                'type' => 'required|string|min:2'
            ],
            [
                'required' => 'Il campo :attribute è obbligatorio',
                'min' => 'Il minimo dei caratteri è :attribute',
                'title.unique' => 'Il titolo esiste già',
                'thumb.unique' => 'L\'immagine esiste già'
            ]
        );

        $data = $request->all();

        $newComic = new Comic;
        $newComic->fill($data);
        // $newComic->slug = Str::slug($newComic->title, '-');
        $newComic->save();

        return redirect()->route('comics.show', compact('newComic'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)   //! SHOW --------------------------------------------------------------------------------------------------------------------------
    {
        $comic = Comic::findOrFail($id);
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)  //! EDIT --------------------------------------------------------------------------------------------------------------------------
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)  //! UPDATE --------------------------------------------------------------------------------------------------------------------------
    {
        $request->validate(
            [
                'title' => 'required|string|unique:comics|min:5',
                'description' => 'required|string|min:5',
                'thumb' => 'required|string|unique:comics|min:5',
                'price' => 'required|integer',
                'type' => 'required|string|min:2'
            ],
            [
                'required' => 'Il campo :attribute è obbligatorio',
                'min' => 'Il minimo dei caratteri è :attribute',
                'title.unique' => 'Il titolo esiste già',
                'thumb.unique' => 'L\'immagine esiste già'
            ]
        );

        $data = $request->all();
        $data['slug'] = Str::slug($data['title'], '-');

        $comic->update($data);

        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)   //! DESTROY --------------------------------------------------------------------------------------------------------------------------
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }
}

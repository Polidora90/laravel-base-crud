<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();

        return view('comics.comic_index', [
            'comics' => $comics
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.comic_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newComicData = $request->all();

        $newComic = new Comic();
       
        $newComic->title = $newComicData['title'];
        $newComic->description = $newComicData['description'];
        $newComic->price = $newComicData['price'];
        $newComic->series = $newComicData['series'];
        $newComic->type = $newComicData['type'];
        $newComic->sale_date = $newComicData['sale_date'];

        $newComic->save();

        return redirect()->route('comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
       //$comic = Comic::find($id);

       if (is_null($comic))
       {
           abort(404);
       }

       return view('comics.comic_show', [
           'comic'=>$comic
       ]);
    }
   



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::findOrFail($id);

        /*
        if (is_null($comic))
        {
            abort(404);
        }
        */

        return view('comics.comic_edit', [
            'comic'=>$comic
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //prendo i dati (fumetto singolo e dati che inserisce l'utente)
        $comic = Comic::findOrFail($id);
        $formData = $request->all();

        //al metodo update passo l'array assoc che ho creato sopra: contiene i dati del form modificato
        //non serve usare il save()
        $comic->update($formData);

        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comic::findOrFail($id);

        $comic->delete();

        return redirect()->route('comics.index');
    }
}

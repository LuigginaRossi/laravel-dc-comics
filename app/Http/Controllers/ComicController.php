<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics= Comic::all();
        
        // dd($comics);
        return view("comics.index", compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("comics.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data= $request->all();
        // dump($data);

        //con i dati ricevuti creo la mia nuova istanza:
        // $comic= new Comic();
        // $comic->title= $data['title'];
        // $comic->description= $data['description'];
        // $comic->thumb= $data['thumb'];
        // $comic->price= $data['price'];
        // $comic->series= $data['series'];
        // $comic->sale_date= $data['sale_date'];
        // $comic->type= $data['type'];

        // $comic->save();

        $comic = Comic::create($data);
        //una volta creato il nuovo elemento, sposto l'utente in un altra pagina:
        return redirect()->route("comics.show", $comic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //cerca un elemento con $id ricevuto:
        $comic= Comic::findOrFail($id);

        if (!$comic) {
            abort(404, "Not found!");
        }
        
        return view("comics.show", compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic= Comic::findOrFail($id);

        if (!$comic) {
            abort(404, "Not found!");
        }

        return view("comics.edit", compact('comic'));
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
        $data= $request->all();

        $comic = Comic::findOrFail($id);

        // $comic->title= $data['title'];
        // $comic->description= $data['description'];
        // $comic->thumb= $data['thumb'];
        // $comic->price= $data['price'];
        // $comic->series= $data['series'];
        // $comic->sale_date= $data['sale_date'];
        // $comic->type= $data['type'];

        // $comic->save();

        $comic->update($data);

        //una volta creato il nuovo elemento, sposto l'utente in un altra pagina:
        return redirect()->route("comics.show", $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic= Comic::findOrFail($id);
        $comic->delete();
        return redirect()->route("comics.index");
    }
}

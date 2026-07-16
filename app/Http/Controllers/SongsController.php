<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;
use App\Http\Requests\SongRequest;

class SongsController extends Controller
{



    public function create () {

    return view ( 'songs.create' );

    }

    public function store (SongRequest $request) {

        // dd($request->all());

        $name = $request->input('name');
        $artist = $request->input('artist');
        $album = $request->input('album');
        $vote = $request->input('vote');
        $img = null;

        if ( $request->file('img')  ) {
         // $img = $request->file('img')->store('public/img');
        $img = $request->file('img')->store('img','public');

        }

        // dd($request->all());


        $song = new Song();

        $song->name = $name;
        $song->artist = $artist;
        $song->album = $album;
        $song->vote = $vote;
        $song->img = $img;


        $song->save();

        return redirect()->route('songs.index')->with('status', 'Canzone correttamente aggiunta');

    }

    public function index () {

    $songs = Song::all();

    return view ('songs.index' , ['songs'=>$songs]);

    }

    public function show ( Song $song  ) {

    return view('songs.show', compact('song'));
    }

    public function edit ( Song $song  ) {

    return view ('songs.edit' , compact('song') );

    }


    public function update(Request $request, Song $song){
    $dati = [
        'name'   => $request->input('name'),
        'artist' => $request->input('artist'),
        'album'  => $request->input('album'),
        'vote'   => $request->input('vote'),
    ];

    if ($request->file('img')) {
        $dati['img'] = $request->file('img')->store('img', 'public');
    }

    $song->update($dati);

    return redirect()->route('songs.show', $song)->with('status', 'Canzone correttamente modificata');
}


    public function destroy (Song $song) {

        $song->delete();

        return redirect()->route('songs.index')->with('status', 'Canzone correttamente eliminata');
    }

}

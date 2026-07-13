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

    public function add (SongRequest $request) {

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

        return redirect()->route('song.index')->with('status', 'Canzone correttamente aggiunta');

    }

    public function index () {

    $songs = Song::all();

    return view ('songs.index' , ['songs'=>$songs]);

    }

}



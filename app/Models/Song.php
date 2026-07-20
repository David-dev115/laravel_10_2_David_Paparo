<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Song extends Model
{

    protected $fillable = [

        'name',
        'artist',
        'album',
        'vote',
        'img',
        'user_id'

    ];

        public function user(){

    return $this->belongsTo(User::class);

    }


}


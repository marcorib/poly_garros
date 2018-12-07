<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Note; // nom model

class Note extends Model
{
    //
    protected $table = 'note_interne';
}

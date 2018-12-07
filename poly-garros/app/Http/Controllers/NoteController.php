<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Note; // nom model

class NoteController extends Controller
{
    //

    public function show()

   {
       $Note=Note::all();
       return view('note', compact('Note'));
       $myJSON = json_encode($$Note);

       echo $myJSON;
   }

  
    public function insert(Request $r)

   {
        $Note = new Note;
        $Note->note_interne_emetteur =$r->input('commentFrom');
        $Note->note_interne_recepteur =$r->input('commentTO');
        $Note->note_interne_commentaire =$r->input('comment');

        $Note->save();

       
    }

}

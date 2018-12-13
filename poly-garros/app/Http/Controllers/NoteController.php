<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Note; 

class NoteController extends Controller
{

  public function show(){

    if(isset($_GET["delete"])){
      $Note=Note::where('id',$_GET['delete'])->delete();
      $Note=Note::all();
      return view('home', ['Note'=> $Note]);
    }
    else{
      $Note=Note::orderby('id', 'desc')->get();
      return view('home', ['Note'=> $Note]);
    }
  }

  public function insert(Request $r){

    $Note = new Note;
    $Note->note_interne_emetteur = $r->input('commentFrom');
    $Note->note_interne_recepteur = $r->input('commentTO');
    $Note->note_interne_commentaire = $r->input('comment');
    $Note->note_interne_date = $r->input('date');
    $Note->save();

    return Redirect::to('admin');
  }
}
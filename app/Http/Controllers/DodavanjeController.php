<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DodavanjeController extends Controller
{
    function insert(Request $red)
    {
     $izvodjac=$red->input('izvodjac');
     $naslov=$red->input('naslov');
     $tekst=$red->input('tekst');

     $data=array('izvodjac'=>$izvodjac,'naslov'=>$naslov,'tekst'=>$tekst);

     DB::table('music')->insert($data);
     echo"bravooo";
    }
}

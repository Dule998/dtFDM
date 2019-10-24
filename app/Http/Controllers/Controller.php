<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Http\Request;
use DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function insert(Request $red)
    {
     $izvodjac=$red->input('izvodjac');
     $naslov=$red->input('naslov');
     $tekst=$red->input('tekst');

     $data=array("izvodjac"=>$izvodjac,"naslov"=>$naslov,"tekst"=>$tekst);

     DB::table('music')->insert($data);
    }
}

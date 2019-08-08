<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class registerlistController extends Controller
{
    public function registerlist(){
      $isi=DB::table('assessment')->join('register_list','register_list.id_asses','=','assessment.id_asses')->get();

      return view ('main_menu.registerlist',[
        'isi'=>$isi
      ]);
    }
}

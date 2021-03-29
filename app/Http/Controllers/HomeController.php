<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TimeLines;
use App\Models\Structure;
class HomeController extends Controller
{
    //
    public function index(){
        $period = Timelines::get();
        $p = TimeLines::find(1);
        $structure = $p->structure;
        return view('welcome',compact('period','structure'));
    }

    public function structure($id){
        $period = Timelines::get();
        $p = TimeLines::find($id);
        $structure = $p->structure;
        return json_encode(array('data'=>$structure));
    }
}

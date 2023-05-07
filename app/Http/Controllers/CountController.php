<?php

namespace App\Http\Controllers;

use App\Models\Roles;
use Illuminate\Http\Request;
use PHPUnit\Framework\Constraint\Count;

class CountController extends Controller
{
    public function index(){


        return view('count.index');
    }
    public function setCount(){
        $count = new \App\Models\Count();
        $roles = new Roles();
        return view('count.setCount',['count'=>  $count->latest()
        ->first()]);
    }
    public function post(Request $request){
        $count = new \App\Models\Count();
        $last = $count->latest()
        ->first();
        if($last === null){
            $count->s_date = $request->sdate;
            $count->e_date = $request->edate;
            $count->remaining_days = $request->rnumber;
            $count->save();
        }
        else{
            $last->s_date = $request->sdate;
            $last->e_date = $request->edate;
            $last->remaining_days = $request->rnumber;
            $last->update();
        }

        return redirect('/set-count');
    }
}

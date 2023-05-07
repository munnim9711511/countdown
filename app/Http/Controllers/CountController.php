<?php

namespace App\Http\Controllers;

use App\Models\Roles;
use Illuminate\Http\Request;
use PHPUnit\Framework\Constraint\Count;
use Carbon\Carbon;
use App\Models\Notice;
use DateTime;
class CountController extends Controller
{
    public function index(){

        $count = new \App\Models\Count();
    $old = $count->latest()->first();
 
      $date1 = Carbon::createFromFormat('m/d/Y',Carbon::parse($old->s_date)->format('m/d/Y') );
      $date2 = Carbon::createFromFormat('m/d/Y', now()->format('m/d/Y'));

     if($date1->gte($date2)) {

     }
      else{
        $old->remaining_days =  $old->remaining_days -1;
        $old->s_date = now();
        $old->save();
      }
      
       $notice = new Notice();
        return view('count.index',['count'=>$old,'notice'=>$notice->latest()->first()]);
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
            $datetime1 = new DateTime($request->sdate);
            $datetime2 = new DateTime($request->edate);
            $interval = $datetime1->diff($datetime2);
            $days = $interval->format('%a');  
           
             $count->remaining_days =  $days ;
            $count->save();
        }
        else{
            $last->s_date = $request->sdate;
            $last->e_date = $request->edate;
            $datetime1 = new DateTime($request->sdate);
            $datetime2 = new DateTime($request->edate);
            $interval = $datetime1->diff($datetime2);
            $days = $interval->format('%a');  
            $last->remaining_days =  $days;
            $last->update();
        }

        return redirect('/set-count');
    }
}

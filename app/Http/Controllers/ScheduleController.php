<?php

namespace App\Http\Controllers;

use App\Models\Facultie;
use App\Models\schedule;
use App\Models\Classroom;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;


class ScheduleController extends Controller
{
    // schedule
    public function index_schedule()
    {
        $classrooms =Classroom::all();
        $faculties=Facultie::all();
        return view('pages.schedule.create',compact('classrooms','faculties'));
    }

    public function store_schedule(Request $request)
    {
         // store courses in database
        $schedules = new Schedule();
        $schedules->type1=$request->type1;
        $schedules->type2=$request->type2;
        $schedules->facultie_id=$request->facultie_id;
        $schedules->classroom_id=$request->classroom_id;

        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('schedules',$imagename);
        $schedules->image=$imagename;
        $schedules->save();

        Toastr::success('تم ارسال الكورس بنجاح ','');

        // return redirect()->back()->with('message','تم ارسال الكورس بنجاح');
    

        // dd($schedules);
        // toastr()->success('CREATE ClassRoom success');
        return redirect()->back();
    }
}

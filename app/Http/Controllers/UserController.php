<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Course;
use App\Models\Aboutfa;
use App\Models\Library;
use App\Models\Aboutcou;
use App\Models\Facultie;
use App\Models\schedule;
use App\Models\Classroom;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Console\Scheduling\Schedule;

class UserController extends Controller
{
    public function index_student()
    {
        $posts = Post::latest()->get();
        return view('website.home',compact('posts'));
    }


    public function index_courses()
    {
        $courses = Course::latest()->get();
        return view('website.courses',compact('courses'));
    }


    public function index_aboutcou()
    {
        $courses = Aboutcou::get();
        return view('website.about',compact('courses'));
    }


    public function index_aboutfa()
    {
        $courses = Aboutfa::get();
        return view('website.aboutfa',compact('courses'));
    }


    public function profile()
    {
        $doctors = User::all()->where('status','=','doctor');


        return view('pages.profile.profile',compact('doctors'));
    }


    public function show_schedule_info()
    {
        
        $classrooms =Classroom::all();
        $faculties=Facultie::all();
        $schedules = Schedule::all()->where('facultie_id','=','1');

        return view('website.Information_systems',compact('schedules','classrooms'));
    }


    public function show_schedule_since()
    {
        
        $classrooms =Classroom::all();
        $faculties=Facultie::all();
        $schedules = Schedule::all()->where('facultie_id','=','3');

        return view('website.sience',compact('schedules','classrooms'));
    }

    public function show_schedule_manage()
    {
        
        $classrooms =Classroom::all();
        $faculties=Facultie::all();
        $schedules = Schedule::all()->where('facultie_id','=','2');

        return view('website.management',compact('schedules','classrooms'));
    }

    public function show_schedule_build()
    {
        
        $classrooms =Classroom::all();
        $faculties=Facultie::all();
        $schedules = Schedule::all()->where('facultie_id','=','5');
        
        return view('website.build',compact('schedules','classrooms'));
    }

    public function show_schedule_comu()
    {
        
        $classrooms =Classroom::all();
        $faculties=Facultie::all();
        $schedules = Schedule::all()->where('facultie_id','=','4');

        return view('website.communications',compact('schedules','classrooms'));
    }


    //all users
    public function get_users()
    {
        $users = User::all();
        $status = User::get('status');

        return view('pages.users.index',compact('users','status'));
    }


    public function update_users(Request $request,User $user)
    {
        try {

            $user=User::findOrFail($request->id);
            
                $user->name = $request->name;
                $user->email = $request->email;
                $user->phone = $request->phone;
                $user->address = $request->address;

                $user->password = bcrypt($request->password);

                $user->status = $request->status;
                // dd($user);
                $user->save();
                
            Toastr::success('تم تعديل المستخدم بنجاح','');

            
            // toastr()->success('UPDATE ClassRoom success');
    
            return redirect()->route('all.users');
        }catch(\Exception $e){
            return redirect()->back()->withErrors(['error'=>$e->getMessage()]);
    
        }
}

        public function destroy_user(Request $request,User $student)
    {
        $student=User::find($request->id)->delete();
        return redirect()->back();
    }
        
    

    
}

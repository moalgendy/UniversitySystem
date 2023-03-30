<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use PHPUnit\Framework\Constraint\Count;

class CourseController extends Controller
{

    // show page course create
    public function index()
    {
        return view('pages.courses.create');
    }


    // store courses in database
    public function store(Request $request)
    {
        $Courses = new Course();
        $Courses->name=$request->name;
        $Courses->content=$request->content;

        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('Courses',$imagename);
        $Courses->image=$imagename;
        $Courses->save();

        Toastr::success('تم ارسال الكورس بنجاح','');

        return redirect()->back();
    }


    // show all courses in database
    public function show_courses()
    {
        $courses = Course::all();

        return view('pages.courses.index',compact('courses'));
    }


    // delete courses from database and from student
    public function course_destroy($id)
    {
        Course::destroy($id);

        Toastr::success('تم حذف الكورس بنجاح','');

        return redirect()->back();
    }


    // store courses in database
    public function course_reserv(Request $request)
    {
        $reserv = new Reservation();
        $reserv->name=Auth::user()->name;
        $reserv->phone=Auth::user()->phone;

        $image=Auth::user()->profile_photo_url;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('CoursesReservation',$imagename);
        $reserv->image=$imagename;
        $reserv->save();

        Toastr::success('تم ارسال الكورس بنجاح','');

        return redirect()->back();
    }

    public function update(Request $request, Course $course)
    {
        
        // $Courses = new Course();
        // $Courses->name=$request->name;
        // $Courses->content=$request->content;

            $course=Course::findOrFail($request->id);
            
                $course->name = $request->name;
                $course->content = $request->content;
                $image=$request->image;
                $imagename=time().'.'.$image->getClientOriginalExtension();
                $request->image->move('Courses',$imagename);
                $course->image=$imagename;
                $course->save();

            Toastr::success('تم التعديل بنجاح','');


            return redirect()->route('dash.show_course');


        }



        // show all courses in database
    public function show_courses_reservation()
    {
        $reservation = Reservation::where('email','=',Auth::user()->email)->get();

        return view('website.show_courses_re',compact('reservation'));
    }


    
}

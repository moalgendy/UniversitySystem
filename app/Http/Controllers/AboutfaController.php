<?php

namespace App\Http\Controllers;

use App\Models\Aboutfa;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class AboutfaController extends Controller
{
    
   // show page course create
    
    public function index()
    {
        return view('pages.Aboutfa.create');
    }


    // store courses in database

    public function store(Request $request)
    {
        $Courses = new Aboutfa();
        $Courses->title=$request->title;

        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('Aboutfa',$imagename);
        $Courses->image=$imagename;
        $Courses->save();

        Toastr::success('تم ارسال الكورس بنجاح','');

        return redirect()->back();
    }


    // show all courses in database

    public function show_aboutfa()
    {
        $courses = Aboutfa::all();

        return view('pages.Aboutfa.index',compact('courses'));
    }


    // delete courses from database and from student

    public function aboutfa_destroy($id)
    {
        Aboutfa::destroy($id);

        Toastr::success('تم حذف الكورس بنجاح','');

        return redirect()->back();
    }



    public function update(Request $request, Aboutfa $course)
    {
        
        // $Courses = new Course();
        // $Courses->name=$request->name;
        // $Courses->content=$request->content;

            $course=Aboutfa::findOrFail($request->id);
            
            $course->title=$request->title;
    
            $image=$request->image;
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('Aboutfa',$imagename);
            $course->image=$imagename;
            $course->save();

            Toastr::success('تم التعديل بنجاح','');

            return redirect()->route('dash.show_Aboutfa');


        }
}

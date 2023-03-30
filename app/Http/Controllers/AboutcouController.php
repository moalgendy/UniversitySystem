<?php

namespace App\Http\Controllers;

use App\Models\Aboutcou;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class AboutcouController extends Controller
{
    // show page course create
    public function index()
    {
        return view('pages.aboutcou.create');
    }


    // store courses in database
    public function store(Request $request)
    {
        $Courses = new Aboutcou();
        $Courses->title=$request->title;

        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('Aboutcou',$imagename);
        $Courses->image=$imagename;
        $Courses->save();

        Toastr::success('تم ارسال الكورس بنجاح','');

        return redirect()->back();
    }


    // show all courses in database
    public function show_aboutcou()
    {
        $courses = Aboutcou::all();

        return view('pages.Aboutcou.index',compact('courses'));
    }


    // delete courses from database and from student
    public function aboutcou_destroy($id)
    {
        Aboutcou::destroy($id);

        Toastr::success('تم حذف الكورس بنجاح','');

        return redirect()->back();
    }



    public function update(Request $request, Aboutcou $course)
    {
        
        // $Courses = new Course();
        // $Courses->name=$request->name;
        // $Courses->content=$request->content;

            $course=Aboutcou::findOrFail($request->id);
            
            $course->title=$request->title;
    
            $image=$request->image;
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('Aboutcou',$imagename);
            $course->image=$imagename;
            $course->save();

            Toastr::success('تم تعديل الكورس بنجاح','');

            return redirect()->route('dash.show_Aboutcou');


        }
}

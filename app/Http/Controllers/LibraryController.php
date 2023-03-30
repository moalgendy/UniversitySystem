<?php

namespace App\Http\Controllers;

use App\Models\Library;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class LibraryController extends Controller
{

    // show page library create
    public function index()
    {
        return view('pages.library.create');
    }

    public function index_books()
    {
        $books = Library::latest()->get();
        return view('website.library',compact('books'));
    }


    // store book in database
    public function store(Request $request)
    {
        $Books = new Library();
        $Books->book_name=$request->name;
        $Books->book_content=$request->content;
        $Books->book_title=$request->title;

        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('Library',$imagename);
        $Books->book_image=$imagename;
        $Books->save();

        Toastr::success('تم ارسال الكتاب بنجاح','');

        return redirect()->back();
    }


    // show all books in database
    public function show_books()
    {
        $books = Library::all();

        return view('pages.library.index',compact('books'));
    }


    // delete courses from database and from student
    public function book_destroy($id)
    {
        Library::destroy($id);

        Toastr::success('تم حذف الكتاب بنجاح','');

        return redirect()->back();
    }


    public function update(Request $request, Library $course)
    {
        
        // $Courses = new Course();
        // $Courses->name=$request->name;
        // $Courses->content=$request->content;

            $course=Library::findOrFail($request->id);
            
                $course->book_name = $request->name;
                $course->book_title = $request->title;
                $course->book_content = $request->content;
                $image=$request->image;
                $imagename=time().'.'.$image->getClientOriginalExtension();
                $request->image->move('library',$imagename);
                $course->book_image=$imagename;
                $course->save();

            Toastr::success('تم التعديل بنجاح','');

            return redirect()->route('dash.show_books');


        }


}

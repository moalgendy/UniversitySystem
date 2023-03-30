<?php

namespace App\Http\Controllers;

use App\Models\Security;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class SecurityController extends Controller
{
    // show security page
    public function index()
    {
        return view('pages.security.create');
    }

    // show all enter in institute
    public function index_manager()
    {
        $securs = Security::latest()->get();
        return view('pages.security.index',compact('securs'));
    }

    // store enters in database
    public function add_secur(Request $request)
    {
        $securs = new Security();
        $securs->name=$request->name;
        $securs->title=$request->title;

        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('Security',$imagename);
        $securs->image=$imagename;
        $securs->save();

        Toastr::success('تم ارسال الدخول بنجاح','');

        return redirect()->back();
        
    }

    // delete courses from database and from student
    public function security_destroy($id)
    {
        Security::destroy($id);

        return redirect()->back()->with('message','تم حذف الكورس بنجاح');
    }
    
}

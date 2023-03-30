<?php

namespace App\Http\Controllers;

use Session;
use App\Models\Student;
use App\Models\Complaint;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class ComplaintController extends Controller
{
    public function index()
    {
        return view('website.complaint');
    }

    public function dash_index()
    {
        $complaints = Complaint::all();
        return view('pages.complaints.index',compact('complaints'));
    }

    public function store(Request $request)
    {

            $complaints = new Complaint();
            $complaints->name = Auth::user()->name;
            $complaints->phone = Auth::user()->phone;
            $complaints->email = Auth::user()->email;
            $complaints->title = $request->title;
            $complaints->content = $request->content;
            $complaints->save();
            
        Toastr::success('تم ارسال الشكوى بنجاح','');

        return redirect()->back();
    }
}

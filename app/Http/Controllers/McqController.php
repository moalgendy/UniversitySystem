<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Mcq;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class McqController extends Controller
{
    public function index()
    {
        $status = Mcq::get('status');
        $categories = Category::get();
        // $faculties= Facultie::with(['sections'])->get();
        // $list_faculties= Facultie::all();

        return view('pages.quiz.create',compact('status','categories'));
    }

    public function store(Request $request)
    {
        
        $mcq = new Mcq();
        $mcq->category_id = $request->category_id;
        $mcq->qui = $request->qui;
        $mcq->status = $request->status;

        $mcq->choose1 = $request->choose1;
        $mcq->choose2 = $request->choose2;
        $mcq->choose3 = $request->choose3;
        $mcq->choose4 = $request->choose4;
        $mcq->choose5 = $request->choose5;
        $mcq->choose6 = $request->choose6;

        $mcq->true1 = $request->true1;
        $mcq->true2 = $request->true2;
        $mcq->true3 = $request->true3;
        $mcq->true4 = $request->true4;
        $mcq->true5 = $request->true5;
        $mcq->true6 = $request->true6;

        // dd($mcq);

        $mcq->save();
        Toastr::success('تم ارسال السؤال بنجاح ','Success');

        return redirect()->back();
    }

    public function index_qui()
    {
        $quiz = Mcq::all();
        // $categories = Category::all();
        $categories = Category::with(['mcqs'])->get();

        return view('pages.quiz.index',compact('quiz','categories'));
    }
}

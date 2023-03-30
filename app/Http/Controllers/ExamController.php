<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function store(Request $request)
    {
        $input = $request->all();
        $hobby = $input['sel'];

        $input['sel'] = implode(',' , $hobby);
// dd($input['sel']);
        Exam::create($input);
        // $input = new Exam();
        // $input = $request->all();
        // $hobby = $input['sel'];

        // $input['sel'] = implode(',' , $hobby);
        // $input->mcq_id = $request->sel;
// dd($input['sel']);
        // $input['sel']->save();
        
        return redirect()->back();
    }
}

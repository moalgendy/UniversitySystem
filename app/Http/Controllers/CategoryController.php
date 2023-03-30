<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class CategoryController extends Controller
{
    public function index()
    {
        return view('pages.quiz.add_category');
    }

    public function store(Request $request)
    {
        $categories = new Category();
        $categories->category_name = $request->category;
        $categories->save();

        Toastr::success('تم اضافة المحاضرة بنجاح','');

        return redirect()->back();
    }
}

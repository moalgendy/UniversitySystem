<?php

namespace App\Http\Controllers;

use App\Models\Holy;
use App\Models\User;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;

class HolyController extends Controller
{
    public function index()
    {
        return view('pages.holies.create');
    }

    public function show()
    {
        $holies = Holy::latest()->get();
        return view('pages.holies.index',compact('holies'));
    }


    public function store_holy(Request $request)
    {


        



        
        $holy = new Holy();
        $holy->name = Auth::user()->name;
        $holy->email = Auth::user()->email;
        $holy->user_id = Auth::user()->id;
        $holy->content = $request->content;
        $holy->numofday = $request->numofday;
        

        $numofholy = Auth::user()->numofholy;

        // }
            $holy = User::findorFail(Auth::user()->id);
    
            $holy->numofholy =$numofholy - $request->numofday;
            $numofholy = Auth::user()->numofholy - $request->numofday;

        // Auth::user()->numofholy = $numofholy ;
        // $holy->holy_status = 'processing';
        // dd($holy);
        $holy->save();
        
        Toastr::success('تم طلب الاجازة بنجاح','');
        
        return redirect()->back();
    }


    // $numofholy = Auth::user()->numofholy;

    // }

    // $holy = User::findorFail(Auth::user()->id);

    // $holy->name = Auth::user()->name;
    // $holy->email = Auth::user()->email;
    // $holy->user_id = Auth::user()->id;
    // $holy->password = Auth::user()->password;

    // $holy->numofholy =$numofholy - $request->numofday;
    

    

    // Auth::user()->numofholy = $numofholy ;
    // $holy->holy_status = 'processing';
    // dd($holy);
    // $holy->save();

//     public function delivered($id)
// {
// // if (Holy::where('user_id' == $id)) {
    
//     $holies = Holy::find($id);
//     // $userid = $holies->user_id;

//     $holy = User::get();

//     // foreach ($holies as $holies) {
//     // $numofholy = $holy;
//     // $numofday = $holies->numofday;
    
//     // $numofday = $holies->numofday;

//     // $holy = User::get();
//     // $holys = $holy->numofholy;
//     $holy =$holy - $holies->numofday;
//     // $holes = $holies->numofholy;

//     $holies->holy_status="acceptably";

    
//     // $holy->numofholy = $holies->numofholy;

//     // dd($holies);
//     $holies->save();
//     return redirect()->back();
// // }

    
// // }
// }


// public function delivered(Request $request)
//     {

//         // $holies = Holy::where('id','user_id')->get();

//         // $numofholy = Auth::user()->numofholy;
//         // $holies = Holy::where('id','=','user_id')->get();
//         // foreach ($holies as $holies) {}
//         // $numofholy = Auth::user()->numofholy - $request->numofday;
        // $numofholy = Auth::user()->numofholy;

//         // }
        // $holy = User::findorFail(Auth::user()->id);
//         // $holy->name = Auth::user()->name;
//         // $holy->email = Auth::user()->email;
//         // $holy->user_id = Auth::user()->id;
//         // $holy->password = Auth::user()->password;
        // $holy->numofholy =$numofholy - $request->numofday;
        

        

//         // Auth::user()->numofholy = $numofholy ;
//         // $holy->holy_status = 'processing';
//         // dd($holy);
        // $holy->save();
        
//         return redirect()->back();
//     }

    public function destroy_holies($id)
    {
        Holy::destroy($id);

        Toastr::success('تم حذف الاجازة بنجاح','');


        return redirect()->back();
    }
}









// $holies = User::where('id','user_id')->get();
//         $numofholy = Auth::user()->numofholy;
//         foreach ($holies as $holy) {
//         $numofholy = Auth::user()->numofholy - $request->numofday;
            

//         }
//         $holy = new Holy();
//         $holy->name = Auth::user()->name;
//         $holy->email = Auth::user()->email;
//         $holy->user_id = Auth::user()->id;
//         $holy->content = $request->content;
//         $holy->numofday = $request->numofday;
        

        

//         $holy->numofholy = $numofholy ;
//         $holy->holy_status = 'processing';
//         dd($holy);
//         $holy->save();

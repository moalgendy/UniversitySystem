<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::all();
        return view('website.reserve_course',compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reserv = new Reservation();
        if (Auth::user()) {
            $reserv->name = Auth::user()->name;
            $reserv->email = Auth::user()->email;
            $reserv->phone = Auth::user()->phone;
            $reserv->course_id = $request->course_id;
            
        $reserv->image=Auth::user()->profile_photo_path;
        }else {
            $reserv->name = $request->name;
            $reserv->email = $request->email;
            $reserv->phone = $request->phone;
            $reserv->course_id = $request->course_id;
            $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('CoursesReservation',$imagename);
        $reserv->image=$imagename;
        }
        
        $reserv->save();

        Toastr::success('تم حجز الكورس بنجاح ','Success');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        Reservation::destroy($reservation->id);

        return redirect()->route('course.reserva');

    }
}

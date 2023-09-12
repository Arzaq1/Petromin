<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class CalenderController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
        $events=array();
        $bookings=Booking::all();
        foreach($bookings as $booking){
            $events[]=[
                 'title'=>$booking->title,
                 'start'=>$booking->start_date,
                 'end'=>$booking->end_date
                  ];

        }

          return view('calender.home',['events'=>$events]);
    }
}

<?php

namespace App\Http\Controllers;
use App\Models\Booking;
use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function ee()
    {
        $events=array();
        $bookings=events::all();
        foreach($bookings as $booking){
            $events[]=[
                 'title'=>$booking->title,
                 'start'=>$booking->start_date,
                 'end'=>$booking->end_date
                  ];
        }
  $month=date('F');
  $currentMonth = date('m') - 1; // شهر الآن (0-11)
  $currentYear = date('Y'); //

          return view('home',compact('bookings','currentMonth','currentYear'));
    }

    public function index()
    {
        $bookings=Event::all();
        return view('home',compact('bookings'));

}


    public function dashbord()
    {
        return view('dashbord');
    }
    public function show()
    {
        $bookings=Booking::all();

        return $bookings;
    }

    public function PrevMonth($id)
    {
        $PrevMonth=Booking::find($id-1);
        return view('home',compact('PrevMonth'));

    }
    public function nextMonth($id)
    {

        $bookings=Booking::all();
        //return $bookings;
        $nextMonth=Booking::find($id+1);
        return view('home',compact('nextMonth'));

    }
    /*public function showevents($id)
    {
        $data=array();
        $events=Event::all();
        foreach($events as $event){
            if($event->month==$id){
            $data[]=[
                 'title'=>$event->title,
                 'start'=>$event->start_date,
                 'end'=>$event->end_date,
                 'month'=>$event->month,
                  ];

                }


            }
        return view('home',compact('data'));

    }*/
    public function showevents(Request $request)
{

 $images = [
    1 => 'img/JANUARY.png',
    2 => 'img/Element.svg',
    3 => 'img/MARCH-1.png',
    4 => 'img/april.jpg',
    5 => 'img/MAY.png',
    6 => 'img/JUNE.png',
    7 => 'img/JULY -1.png',
    8 => 'img/AUGUST .png',
    9 => 'img/SEPTEMBER -1.png',
    10 => 'img/OCTOBER -1.png',
    11 => 'img/NOVEMBER .png',
    12 => 'img/DECEMBER .png',
];

    $month = $request->input('month', date('n'));
    $monthName = $this->months[$month];
    $events = Event::whereMonth('start_date', $month)->get();

    $previousMonth = $month - 1;
    if ($previousMonth == 0) {
        $previousMonth = 12;
    }
    $previousMonthName = $this->months[$previousMonth];
    $titlee = $this->title[$previousMonth];
    $note = $this->notes[$previousMonth];

    $nextMonth = $month + 1;
    if ($nextMonth == 13) {
        $nextMonth = 1;
    }
    $nextMonthName = $this->months[$nextMonth];
    $k=$this->months[$month];
    return view('home', [
        'events' => $events,
        'currentMonth' => $month,
        'previousMonth' => $previousMonth,
        'previousMonthName' => $previousMonthName,
        'monthName'=>$monthName,
        'nextMonth' => $nextMonth,
        'year'=>date('Y'),
        'day'=>date('d'),
        'title' => $titlee,
        'notes' => $note,
        'image'=>$images[$month],
        'nextMonthName' => $nextMonthName,
        'k'=>$k,
    ]);
}


protected $months = [
    1 => 'January',
    2 => 'February',
    3 => 'March',
    4 => 'April',
    5 => 'May',
    6 => 'June',
    7 => 'July',
    8 => 'August',
    9 => 'September',
    10 => 'October',
    11 => 'November',
    12 => 'December',
];
protected $title = [
    1 => 'Highlights Of The MonthJ',
    2 => 'Highlights Of The MonthF',
    3 => 'Highlights Of The MonthM',
    4 => 'Highlights Of The MonthA',
    5 => 'Highlights Of The MonthM',
    6 => 'Highlights Of The MonthJ',
    7 => 'Highlights Of The MonthJ',
    8 => 'Highlights Of The MonthA',
    9 => 'Highlights Of The MonthS',
    10 => 'Highlights Of The MonthO',
    11 => 'Highlights Of The MonthN',
    12 => 'Highlights Of The MonthD',
];
protected $notes = [
    1 => 'Highlights Of The MonthJ',
    2 => 'Highlights Of The MonthF',
    3 => 'Highlights Of The MonthM',
    4 => 'Highlights Of The MonthA',
    5 => 'Highlights Of The MonthM',
    6 => 'Highlights Of The MonthJ',
    7 => 'Highlights Of The MonthJ',
    8 => 'Highlights Of The MonthA',
    9 => 'Highlights Of The MonthS',
    10 => 'Highlights Of The MonthO',
    11 => 'Highlights Of The MonthN',
    12 => 'Highlights Of The MonthD',
];

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
   {
        $event=Event::all();
       return view('events.create', compact('event'));
   }

    /**
     * Show the form for creating a new resource.
     */
   // public function create()
   // {
     //   return view('events.create');
        //
   // }
   public function create(Event $event)
   {
       return view('events.create', compact('event'));
   }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'month' => 'required',
            'day' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
        ]);

        Event::create($validatedData);

      //  return redirect()->route('events.index')->with('success', 'تم إنشاء الحدث بنجاح!'); //
        return redirect()->back(); //


    }
    public function storee(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'month' => 'required',
            'day' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
        ]);

        Event::create($validatedData);

        return redirect()->route('events.create')->with('success', 'تم إنشاء الحدث بنجاح!'); //
       // return redirect()::backe()->with(['success'=> 'تم تحديث الحدث بنجاح']);

    }

public function edit($id)
{
    $event=Event::find($id);
    return view('events.edit', compact('event'));
}

public function update(Request $request,$id)
{
    $event = Event::find($id);

    $event->title = $request->input('title');
    $event->month = $request->input('month');
    $event->day = $request->input('day');
    $event->start_date = $request->input('start_date');
    $event->end_date = $request->input('end_date');

    $event->save();

    return redirect()->back();
}


public function delete($id)
{
    $event = Event::find($id);

    $event->delete();

    return redirect()->back();
}
public function showevents($id)
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

}

/*public function update(Request $request, Event $event)
{
    $validatedData = $request->validate([
           'title' => 'required|max:255',
            'month' => 'required',
            'day' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
    ]);

    $event->update($validatedData);

    return redirect()->route('events.index')->with('success', 'تم تحديث الحدث بنجاح!');
}
*/
    /*
    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        //
    }


    public function update(Request $request, string $id)
    {
        //
    }

      public function destroy(string $id)
    {
        //
    }*/
}

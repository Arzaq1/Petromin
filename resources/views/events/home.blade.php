<?php use App\Models\Booking;
?>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petromin</title>
    <!--  css -->
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
    <link href="{{URL::asset('css/fontawesome/css/all.min.css')}}" rel="stylesheet" />

    <!--  javascript -->
   <script src="{{URL::asset('js/app.js')}}" defer></script>
</head>
<body>


<section>

      <div class="trapezoid">
          <img class="img" src="" alt="Background Image">
          <div class="boxe"></div>
          <button class="btn">Learn more</button>
          <p class="current-date"></p>
          <p id="date"></p>

      </div>

      <div class="Container">
            <div class="fas fa-bars" id="menu-icon">
                    <ul class="navlist">
                        <a href="" class="active">Dashbord</a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                        </a>

                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                         @csrf
                     </form>
                   </ul>
                </div>

           <h1  id="" class="current-date2"></h1>
           <h3 class="title"></h3>
         <div class="box">

    <ul id="">
        @if(@isset($bookings))
        @foreach($bookings as $event)
         <li id="start" value="{{date(" Y m d",strtotime($event['start_date']))}}" class="circle">{{date("d",strtotime($event['start_date']))}}</li>
         <li class="circle-1">{{date("d",strtotime($event['end_date']))}}</li>
         <span class="span">{{$event['title']}}</span>
         @endforeach
         @endif
    </ul>


             <!-- <li class="circle"></li>
            <span class="span"> </span>
            <li class="circle"></li>
      <li class="circle-1"></li>
            <span class="span"> </span>

            <li class="circle"></li>
            <span class="span"></span>

            <li class="circle"></li>
            <span class="span"></span>

            <li class="circle"></li>
            <span class="span"></span>
            <li class="circle"></li>
            <span class="span"></span>
            <li class="circle"></li>
            <span class="span"></span>

             -->

           </div>

           <p class="note"></p>

      </div>

      <div class="wrapper">
          <header>
            <p class="current-date"></p>
            <div class="icons">
            <script>

                var Test= document.getElementById('start').value;

                    var TestVar = new Date(Test);

                    var Month = TestVar.getMonth();

                    var Year= TestVar.getFullYear();

                    var Day= TestVar.getDate();

console.log(Month);

</script>
            <a   id="prev" href="{{ route('home',$event['month']) }}"  class="material-symbols-rounded"> &#10094</a>
            <a   id="next" href="{{ route('home',$event['month']) }}" class="material-symbols-rounded">&#10095</a>


            </div>
          </header>
          <div class="calendar">
            <ul class="weeks">
              <li>Sun</li>
              <li>Mon</li>
              <li>Tue</li>
              <li>Wed</li>
              <li>Thu</li>
              <li>Fri</li>
              <li>Sat</li>
            </ul>
            <ul class="days"></ul>
          </div>
          <div class="" id="Image">
                <img  src="img/OCTOBER -2.png" class="imges"/>

          </div>


     </div>



     <div  class="" id="Content">
        <img  src="" class="Images"/>
    </div>


<p class="paragraph"></p>

<img  src="img/En.png" class="logo"/>
<div class="dd"></div>
</section>



<form method="GET" action="{{ route('events.home') }}">
    <input type="number" name="month" min="1" max="12" value="{{ $currentMonth }}">
    <button type="submit">عرض الأحداث</button>
</form>

<a href="{{ route('events.index', ['month' => $previousMonth]) }}">Prev</a>
<a href="{{ route('events.index', ['month' => $nextMonth]) }}">Next</a>


</body>
</html>



<?php
    use App\Models\Booking;
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
    <!--  css
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">-->
    <link href="{{URL::asset('css/fontawesome/css/all.min.css')}}" rel="stylesheet" />
    <!--  javascript -->
   <script src="{{URL::asset('js/app.js')}}" defer></script>
   <link rel="stylesheet" href="{{URL::asset('./css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">

    <script src="{{URL::asset('./js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{URL::asset('./js/bootstrap.min.js')}}"></script>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body>

<section class="container">
    <div class="trapezoid">
      <img class="img" src="" alt="Background Image">
          <div class="boxe"></div>
          <button class="btn">Learn more</button>
        <p class="current-date">{{$year}}  {{$monthName}}</p>
        <p id="date"> {{$day}}</p>
    </div>
    <div class="Container">
            <div class="fas fa-bars" id="menu-icon">
                <ul class="navlist">
                   <a href="{{ route('events.create')}}"  class="active">Dashbord</a>
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

           <h1  id="" class="current-date2" >{{$monthName}}</h1>
           <h3 class="">{{$title}}</h3>
      <div class="box">
        <ul id="">
         @foreach ($events as $event)
            <li id="start" value="{{date("d",strtotime($event['start_date']))}}" class="circle">{{date("d",strtotime($event['start_date']))}}</li>
            <li class="circle-1">{{date("d",strtotime($event['end_date']))}}</li>
            <span class="span">{{ $event->title }}</span>
        </ul>
         @endforeach
      </div>
     <p class="note">{{$title}}</p>
    </div>

    <div class="  wrapper">
        <header>
         <p class="current-date"></p>
         <div class="icons">
            <form id="month-form">
                 <input type="hidden" name="month" min="1" max="12" value="{{ $currentMonth }}">
            </form>
                <a id="prev-button" onclick="prev()"  href="{{ route('home', ['month' => $previousMonth]) }}" class="material-symbols-rounded">&#10094</a>
                <a id="next-button" onclick="next()" href="{{ route('home', ['month' => $nextMonth]) }}" class="material-symbols-rounded">&#10095</a>
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
        <div class="Image" id="Image">
            <img  src="" class="imges"/>
          </div>
     </div>
     <div  class="" id="Content">
        <img  src="" class="Images"/>
    </div>
    <p class="paragraph"></p>

    <img id="logo"  src="img/En.png" class="logo"/>
    </section>
</body>
</html>




const daysTag = document.querySelector(".days"),
      currentDate = document.querySelector(".current-date"),
      currentDate2 = document.querySelector(".current-date2"),
      prevNextIcon = document.querySelectorAll(".icons span");
var dateElement = document.getElementById("date"),
    color_boxe = document.querySelector(".boxe"),
    color_btn = document.querySelector(".btn"),
    color_background = document.querySelector(".trapezoid"),
   // show_title = document.querySelector(".title"),
   // show_event = document.getElementsByTagName("span"),
    show_para = document.querySelector(".note"),
    image2 = document.querySelector(".imges"),
    Notes = document.querySelector(".paragraph"),
    image = document.querySelector(".img"),
    div_Images2 = document.querySelector("#Content"),

    image3 = document.querySelector(".Images"),
    div_Images = document.querySelector("#Image");
    //  var booking=@json($event);
// getting new date, current year and month
let date = new Date(),
    currYear = date.getFullYear(),
    currMonth = date.getMonth();


    const startElements = document.querySelectorAll('#start');

    // إنشاء مجموعة Set فريدة تحتفظ بالقيم المميزة فقط
    const uniqueStartValues = new Set();

    // استرد قيم العناصر وقم بإضافتها إلى المجموعة Set
    startElements.forEach((element) => {
      const value = element.value;
      uniqueStartValues.add(value);
    });

    // تحويل المجموعة Set إلى مصفوفة Array
    const startValues = Array.from(uniqueStartValues);

    console.log(startValues);
    // storing full name of all months in array
const months = ["","January", "February", "March", "April", "May", "June", "July",
              "August", "September", "October", "November", "December"];

// storing  Events of all months in array
let year_events=[["The Performance and Development Planning Conversation helps colleagues and managers align on goals,",
                    "","","","","","","","","","",
                    "","Quarterly Townhall","","","","","","","","",
                    "","","","","","","","","Quarterly Townhall","","","Highlights Of The Month"],
                    ["The Performance and Development Planning Conversation helps colleagues and managers align on goals,",
                    "Quarterly Townhall","","","","","","","","","",
                    "","","","","","","","","","",
                    "","","","","","","","","","Quarterly Townhall","","Highlights Of The Month"],
                    ["The Performance and Development Planning Conversation helps colleagues and managers align on goals,",
                    "Quarterly Townhall","","","","","","","","","",
                    "","","","","","","","","","",
                    "","","","","","","","","","","Quarterly Townhall","Highlights Of The Month"],
                     ["The Performance and Development Planning Conversation helps colleagues and managers align on goals,",
                    "","","","","Quarterly Townhall","","","","","",
                    "","","","","Quarterly Townhall","","","","","",
                    "","","","","","","","","","","","Highlights Of The Month"],
                     ["The Performance and Development Planning Conversation helps colleagues and managers align on goals,",
                    "","","","Quarterly Townhall","","","","","","",
                    "","","","","","","","","","",
                    "","","","","","","Quarterly Townhall","","","","","Highlights Of The Month"],
                     ["The Performance and Development Planning Conversation helps colleagues and managers align on goals,",
                    "New Year","","","","","","","","","",
                    "","","","","","","","","","",
                    "","","","","","","","","","","","Highlights Of The Monthf"],
                    ["The Performance and Development Planning Conversation helps colleagues and managers align on goals, leadership commitments, and development actions. *Year-end Compensation planning is an essential part of our pay-for-performance philosophy",
                    "New Year","","","","","","","","","",
                    "","Quarterly Townhall - By Business Vertical","","","","","International Mentoring Day","","","",
                    "","","","","","","","Performance & Development Planning","","","Year End Compensation","Highlights Of The Month"],
                    ["The Performance and Development Planning Conversation helps colleagues and managers align on goals,",
                    "Quarterly Townhall","","","","","","","","","",
                    "","","","","","","","","","",
                    "","","","","","","","","","","","Highlights Of The Month"],
                    ["The Performance and Development Planning Conversation helps colleagues and managers align on goals,",
                    "","Quarterly Townhall","","","","","","","","",
                    "","","","","","","","","","",
                    "","","","","","","","","","","","Highlights Of The Month"],
                    ["The Performance and Development Planning Conversation helps colleagues and managers align on goals,",
                    "","","Quarterly Townhall","","","","","","","",
                    "","","","","","","","","","",
                    "","","","","","","","","","","","Highlights Of The Month"],
                    ["The Performance and Development Planning Conversation helps colleagues and managers align on goals,",
                    "","","","","Quarterly Townhall","","","","","",
                    "","","","","","","","","","",
                    "","","","","","","","","","","","Highlights Of The Month"],
                    ["The Performance and Development Planning Conversation helps colleagues and managers align on goals,",
                    "","","","","","Quarterly Townhall","","","","",
                    "","","","","","Quarterly Townhall","","","","",
                    "","","","","","","","","","","","Highlights Of The Month"]
                  ]
// storing  Number day of events of all months in array
let number_events=[ ["",
                    "","","","","","","","","","",
                    "","12","","","","","","","","",
                    "","","","","","","","","29","","",""],
                    ["",
                    "","","","","","","","","","",
                    " 11","","","","","","","","","",
                    "","","","","","","","","","30","",""],
                    ["",
                    "1","","","","","","","","","",
                    "","","","","","","","","","",
                    "","","","","","","","","","","31",""],
                    ["",
                    "","","","","5","","","","","",
                    "","","","","15","","","","","",
                    "","","","","","","","","","","",""],
                    ["",
                    "","","","4","","","","","","",
                    "","","","","","","","","","",
                    "","","","","","","27","","","","",""],
                    ["",
                    "1","","","","","","","","","",
                    "","","","","","","","","","",
                    "","","","","","","","","","","",""] ,
                    ["",
                    "1","","","","","","","","","",
                    "","12","","","","","17","","","",
                    "","","","","","","","28","","","31",""],
                    ["",
                    "1","","","","","","","","","",
                    "","","","","","","","","","",
                    "","","","","","","","","","","",""],
                    ["",
                    "","2","","","","","","","","",
                    "","","","","","","","","","",
                    "","","","","","","","","","","",""],
                    ["",
                    "","","3","","","","","","","",
                    "","","","","","","","","","",
                    "","","","","","","","","","","",""] ,
                    ["",
                    "","","","4","","","","","","",
                    "","","","","","","","","","",
                    "","","","","","","","","","","",""],
                    ["",
                    "","","","","5","","","","","",
                    "","","","","","16","","","","",
                    "","","","","","","","","","","",""]
                 ] ;
 // storing Images  of all months in array
var images=["img/JANUARY.png","img/JANUARY.png","img/Element.svg","img/MARCH-1.png",
             "img/april.jpg","img/MAY.png","img/JUNE.png","img/JULY -1.png",
             "img/AUGUST .png","img/SEPTEMBER -1.png","img/OCTOBER -1.png","img/NOVEMBER .png","img/DECEMBER .png"];

// storing Images of all months in array
var images2=["","","img/feb.png","img/MARCH-2.png",
             "img/APRIL-2.png","","","img/JULY -2.png",
             "","img/SEPTEMBER -2.png","img/OCTOBER -2.png","",""];

 // storing  Notes of all months in array
var array_Notes=["Happy New Year 2023!","","International Women's Day",
             "World Earth Day","Mental Health Awarness Month","World Enviroment Day","World chocolate Day",
             "","","Breast Cancer Awerness","Prostate Cancer Awarness","World Conversation Day"];

// storing color background Div of all months in array
var array_color = ["red", "rgb(11, 175, 25)", "red", "rgb(250, 124, 6)", "red", "rgb(250, 124, 6)", "red",
             "rgb(250, 124, 6)", "rgb(11, 175, 25)", "rgb(250, 124, 6)", "red", "rgb(250, 124, 6)"];

 // storing color background Botton of all months in array
 var array_color_btn = ["rgb(250, 124, 6)", "rgb(250, 124, 6)", "rgb(250, 124, 6)", "red", "rgb(250, 124, 6)",
                   "red", "rgb(250, 124, 6)", "red", "rgb(250, 124, 6)", "red", "rgb(250, 124, 6)", "red"];

// storing color background of all months in array
var background=["","","rgb(8, 104, 5)","","#ECE3D6","","","","black","","","",""];
var images3=["","","img/Feb_day.png","","","","","","","img/SEPTEMBER -3.svg","","",""];

const monthForm = document.getElementById('month-form');
const prevButton = document.getElementById('prev-button');
const nextButton = document.getElementById('next-button');


prevButton.addEventListener('click', function() {

    const currentMonth = parseInt(monthForm.month.value);
    const previousMonth = currentMonth - 1 < 0 ? 12 : currentMonth - 1;
console.log(currMonth);
    changeImageByMonth(previousMonth);
    return false;
});


nextButton.addEventListener('click', function() {
    const currentMonth = parseInt(monthForm.month.value);
    const nextMonth = currentMonth + 1 > 13 ? 1 : currentMonth + 1;

    changeImageByMonth(nextMonth);
    return false;
});


function changeImageByMonth(month) {
    // إجراء تغيير الصورة المعروضة هنا بناءً على الشهر المحدد
    // اجلب عنصر الصورة باستخدام هويته وقم بتعديل الخاصية src
    // مثال:
   image.src=images[month];
   image.className=`${months[2]}+".center"`
   image2.src=`${images2[month]}`
   div_Images.className=`${months[month]}`
   color_boxe.style="background:"+`${array_color[month]}`
   color_btn.style="background:"+`${array_color_btn[month]}`
   color_background.style="background:"+`${background[month]}`
   div_Images2.className=months[month]+"-top"
   image3.src=`${images3[month]}`
   image.className=months[month]+"-center"
   Notes.innerHTML=`${array_Notes[month]}`

}
window.onload = function() {
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    const month = urlParams.get('month');
    if (month !== null) {
        monthForm.month.value = month;
        changeImageByMonth(month);
    }

};
const renderCalendar = () => {
    let firstDayofMonth = new Date(currYear, currMonth, 1).getDay(), // getting first day of month
    lastDateofMonth = new Date(currYear, currMonth + 1, 0).getDate(), // getting last date of month
    lastDayofMonth = new Date(currYear, currMonth, lastDateofMonth).getDay(), // getting last day of month
    lastDateofLastMonth = new Date(currYear, currMonth, 0).getDate(); // getting last date of previous month
    let liTag = "";

var n = 1, num = 0, xx;

    for (let i = firstDayofMonth; i > 0; i--) { // creating li of previous month last days
        liTag += `<li class="inactive">${lastDateofLastMonth - i + 1}</li>`;
    }
    for (let i = 1; i <= lastDateofMonth; i++) { // creating li of all days of current month
         // adding active class to li if the current day, month, and year matched
         let isToday =  startValues.includes(i) ? "active" : "";
           liTag += `<li onclick="show(${i})" class="${isToday}">${i}</li>`;


       /* if(number_events[currMonth][i]!=="")
        {
            show_number_event[num].style="display: block;";
            show_number_event[num].innerHTML=xx ;
            num++;
        }
*/
        if(year_events[currMonth][i]!=="")
        {

           // show_event[n].style="display: block;";
            //show_event[n].innerHTML=year_events[currMonth][i];

            //show_title.innerHTML=year_events[currMonth][32];
            //show_para.innerHTML=year_events[currMonth][0];
            n++;
        }

    }

    for (let i = lastDayofMonth; i < 6; i++) { // creating li of next month first days
        liTag += `<li class="inactive">${i - lastDayofMonth + 1}</li>`;
    }
        // creating li of next month first days
   // currentDate.innerText = `${months[currMonth]} ${currYear}`; // passing current mon and yr as currentDate text
   // currentDate2.innerText = `${months[currMonth]} `; // passing current mon and yr as currentDate text
    //image.src=`${images[currMonth]}`

    daysTag.innerHTML = liTag;
}
renderCalendar();


/*
var currentMonth = {{ $currentMonth }};
var currentYear = {{ $currentYear }};
var currentDate2 = document.querySelector(".current-date2");
currentDate2.innerHTML=currentMonth;


function displayMonth() {
    currentDate2.innerText = `${months[currMonth]} `; // passing current mon and yr as currentDate text

}
function fetchEvents() {
    var eventsList = document.getElementById("events");
    eventsList.innerHTML = "جارٍ التحميل...";

    // استدعاء AJAX لجلب البيانات من الخادم حسب الشهر والسنة الحاليين
    // يمكن استخدام طريقة POST وتمرير الشهر والسنة الحاليين كبيانات مرفقة مع الطلب
    // بعد الاستجابة، يمكن تحديث قائمة الأحداث eventsList بالبيانات الجديدة

    // مثال:
    eventsList.innerHTML = `
    <li class="circle">1</li>
    <li class="circle-1">21</li>
     <span class="span"> New</span>
     @if(@isset($events))
     @foreach($events as $event)
      @if(date('m',strtotime($event['start']))==${months[currMonth]})
      <li class="circle">{{date("d",strtotime($event['start']))}}</li>
      <li class="circle-1">{{date("d",strtotime($event['end']))}}</li>
      <span class="span">{{$event['title']}}</span>
      @endif
      @endforeach
      @endif
    `;
}

displayMonth();
fetchEvents();

*/
prevNextIcon.forEach(icon => { // getting prev and next icons
    icon.addEventListener("click", () => {
       // adding click event on both icons
        // if clicked icon is previous icon then decrement current month by 1 else increment it by 1
        currMonth = icon.id === "prev" ? currMonth - 1 : currMonth + 1;

        if(currMonth < 0 || currMonth > 11) { // if current month is less than 0 or greater than 11
            // creating a new date of current year & month and pass it as date value
            date = new Date(currYear, currMonth, new Date().getDate());
            currYear = date.getFullYear(); // updating current year with new date year
            currMonth = date.getMonth(); // updating current month with new date month
        } else {
            date = new Date(); // pass the current date as date value
        }
    /*    for (var ii = 0; ii <6; ii++) {
            show_event[ii].innerHTML="";
            show_event[ii].style=" display: none;";
        }
        for (var j = 0; j <6; j++) {
            show_number_event[j].innerHTML="";
            show_number_event[j].style=" display: none;";

        }
*/

        renderCalendar(); // calling renderCalendar function


    });

});


document.addEventListener("DOMContentLoaded", function() {
      var currentDate = new Date();
      var day = currentDate.getDate();
      var formattedDate = day
      //dateElement.innerHTML = formattedDate;
    });
    dateElement.addEventListener("click", () => {
        addEventWrapper.classList.toggle("isToday");
      });

function show(event){
   dateElement.innerHTML= event;
  }

  const header = document.querySelector("header");
  window.addEventListener("scroll", function(){
    header.classList.toggle('sticky', window.scrollY > 100);
  });


  let menu=document.querySelector('#menu-icon');
  let navlist=document.querySelector('.navlist');

  menu.onclick =() =>{
    menu.classList.toggle('open');
    navlist.classList.toggle('open');
  };

  //var booking = JSON.parse($event);

//  show_event:booking

const daysTag = document.querySelector(".days"),
      currentDate = document.querySelector(".current-date"),
      currentDate2 = document.querySelector(".current-date2"),
      prevNextIcon = document.querySelectorAll(".icons span");
var dateElement = document.getElementById("date"),
    show_event = document.getElementsByTagName("span"),
    show_number_event = document.getElementsByTagName("li"),
    show_para = document.querySelector(".patagraph"),
    show_title = document.querySelector(".h"),
    image = document.querySelector(".img"),
    s = document.querySelector(".span"),
    l = document.querySelector(".circle"),
    box= document.querySelector(".box"),
    circle = document.querySelector(".circle-1");

// getting new date, current year and month
let date = new Date(),
    currYear = date.getFullYear(),
    currMonth = date.getMonth();
   // image.src="";

// storing full name of all months in array
const months = ["January", "February", "March", "April", "May", "June", "July",
              "August", "September", "October", "November", "December"];

var images=["img/Background1.jpg","img/Feb.jpg","img/Background1.jpg","img/june.jpg",
             "img/Background.jpg","img/june.jpg","img/Background1.jpg","img/june.jpg",
             "img/Background1.jpg","img/june.jpg","img/Background.jpg","img\december.jpg"];
var events_array=[
                { title:"Highlights Of The Month",
                  events:["Development","Planning"],
                  start_date:1,
                  end_date:31,
                  notes:"The Performance and Development "},
 
                  { title:"Highlights Of The Month",
                  events:["New Year","The Performance  ","Development","Planning"],
                  start_date:1,
                  end_date:31,
                  notes:"The Performance and Development "},
 
                  { title:"Highlights Of The Month",
                  events:["New Year"],
                  start_date:1,
                  end_date:31,
                  notes:"The Performance and Development "},
 
                  { title:"Highlights Of The Month",
                  events:["New Year","Development","The Performance  "],
                  start_date:1,
                  end_date:31,
                  notes:"The Performance and Development "},
 
                  { title:"Highlights Of The Month",
                  events:["New Year","Development","The Performance  ","Development","Planning"],
                  start_date:1,
                  end_date:31,
                  notes:"The Performance and Development "},
 
                  { title:"Highlights Of The Month",
                  events:["The Performance  ","Development","Planning"],
                  start_date:1,
                  end_date:31,
                  notes:"The Performance and Development "},
 
                  { title:"Highlights Of The Month",
                  events:["New Year","Development","The Performance  ","Development","Planng"],
                  start_date:1,
                  end_date:31,
                  notes:"The Performance and Development "},
 
                  { title:"Highlights Of The Month",
                  events:["New Year","Development","The Performance  ","Development","Planng"],
                  start_date:1,
                  end_date:31,
                  notes:"The Performance and Development "},
 
                  { title:"Highlights Of The Month",
                  events:["New Year","Development","The Performance  ","Development","Planning"],
                  start_date:1,
                  end_date:31,
                  notes:"The Performance and Development "},
 
                  { title:"Highlights Of The Month",
                  events:["New Year","Development","The Performance  ","Development","Planning"],
                  start_date:1,
                  end_date:31,
                  notes:"The Performance and Development "},
 
                  { title:"Highlights Of The Month",
                  events:["New Year","Development","The Performance  ","Development","Planning"],
                  start_date:1,
                  end_date:31,
                  notes:"The Performance and Development "},
 
                  { title:"Highlights Of The Month",
                  events:["New Year","Development","The Performance  ","Development","Planning"],
                  start_date:1,
                  end_date:31,
                  notes:"The Performance and Development "},
 
                  ];  
                  var keyElement = document.createElement("span");
                  keyElement.className="circle";
                  //var keyElement1 = document.createElement("span");
                 // keyElement1.className="circle";
                  var valueElement = document.createElement("li");
                  valueElement.className="span";
                  var eventElement = document.createElement("div");
                                eventElement.className = "box";
               for (var c = 0; c < events_array.length; c++) {
                    var event = events_array[c];
                      
                    
                                for (var key in event) {
                                    if (event.hasOwnProperty(key) && event[key] !== "") {
                                       
                                        
                                        keyElement.textContent = event.start_date ;
                                        eventElement.appendChild(keyElement);
                    
                                      // keyElement1.textContent = event.end_date ;
                                       // eventElement.appendChild(keyElement1);
                          //               if(event.events.length>=0){    
                        for(var gg=0;gg<event.events.length;gg++)
                            {
                                valueElement.textContent = event.events[gg];
                                  eventElement.appendChild(valueElement);
                        }        
                      //}
                                       
                                    }
                                }
                    
                                eventsContainer.appendChild(eventElement);
                            }
                     
                    //show_number_event.style="display: none;";
                    //show_event.style="display: none;";              
                
const renderCalendar = () => {
    let firstDayofMonth = new Date(currYear, currMonth, 1).getDay(), // getting first day of month
    lastDateofMonth = new Date(currYear, currMonth + 1, 0).getDate(), // getting last date of month
    lastDayofMonth = new Date(currYear, currMonth, lastDateofMonth).getDay(), // getting last day of month
    lastDateofLastMonth = new Date(currYear, currMonth, 0).getDate(); // getting last date of previous month
    let liTag = "";
            
    var n = 1, num = 0, xx, g=0;

    for (let i = firstDayofMonth; i > 0; i--) { // creating li of previous month last days
        liTag += `<li class="inactive">${lastDateofLastMonth - i + 1}</li>`;
    }
    var f;
    for (let i = 1; i <= lastDateofMonth; i++) { // creating li of all days of current month
       
         // adding active class to li if the current day, month, and year matched
        // xx=number_events[currMonth][i];
         let isToday =  i!=xx ? "" : "active";
           liTag += `<li onclick="show(${i})" class="${isToday}">${i}</li>`;
        
           if(event.title!==""){    
            show_title.innerHTML=event.title;
           }
           if(event.notes!==""){    
            show_para.innerHTML=event.notes;
           }
           
           /*  
         if(event.events.length>=0){    
            for(var gg=0;gg<event.events.length;gg++)
                {
                        s.style="display: block;";
                            s.innerHTML=event.events[gg];
                }        
          }

          
          if(event.start_date!==""){    
              l.style="display: block;";
              circle.style="display: block;";
              l.innerHTML=event.start_date;                               
              circle.innerHTML=event.end_date;  
                           
           }

          */
      /*  if(number_events[currMonth][i]!=="")
        {            
            show_number_event[num].style="display: block;";  
            show_number_event[num].innerHTML=xx ;
            num++;
        }  

        if(year_events[currMonth][i]!=="")
        {

            show_event[n].style="display: block;";
            show_event[n].innerHTML=year_events[currMonth][i];

            show_title.innerHTML=year_events[currMonth][32];
            show_para.innerHTML=year_events[currMonth][0];
            n++;
          
         
        } */  
        //show_number_event[num].style="display: none;";
      //  show_event[n].style="display: none;"; 
      
    }
    
    for (let i = lastDayofMonth; i < 6; i++) { // creating li of next month first days
        liTag += `<li class="inactive">${i - lastDayofMonth + 1}</li>`;        
    }

    currentDate.innerText = `${months[currMonth]} ${currYear}`; // passing current mon and yr as currentDate text
    currentDate2.innerText = `${months[currMonth]} `; // passing current mon and yr as currentDate text
    image.src=`${images[currMonth]}`


     
    daysTag.innerHTML = liTag;

}
renderCalendar();


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
        for (var ii = 0; ii <6; ii++) { 
            show_event[ii].innerHTML="";
            show_event[ii].style=" display: none;";
        }
        for (var j = 0; j <6; j++) { 
            show_number_event[j].innerHTML="";
            show_number_event[j].style=" display: none;";
        
        }
      
        renderCalendar(); // calling renderCalendar function
        

    });
     
});


document.addEventListener("DOMContentLoaded", function() {
      var currentDate = new Date();
      var day = currentDate.getDate();
      var formattedDate = day 
      dateElement.innerHTML = formattedDate;
    });
    dateElement.addEventListener("click", () => {
        addEventWrapper.classList.toggle("isToday");
      });

      function show(event){
         dateElement.innerHTML= event;}
      
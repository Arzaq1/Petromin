
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashbord</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="{{URL::asset('./css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">

    <script src="{{URL::asset('./js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{URL::asset('./js/bootstrap.min.js')}}"></script>
    <style>
        :root {
            --bs-success-rgb: 71, 222, 152 !important;
        }

        html,
        body {
            height: 100%;
            width: 100%;
            font-family: Apple Chancery, cursive;
        }

        .btn-info.text-light:hover,
        .btn-info.text-light:focus {
            background: #4481eb;
        }
        table, tbody, td, tfoot, th, thead, tr {
            border-color: #ededed !important;
            border-style: solid;
            border-width: 1px !important;
        }
    </style>
</head>

<body class="bg-light">
 <div class="container py-5" id="page-container">
      <div class="row">
         <div class="col-md-9">
           <div id="Show">
           <h5 class="title_1">Events</h5>
              <table onclick="displayEditForm()">
                <thead>
                <tr>
                <th> Id</th>
                <th>Title </th>
                <th>Month </th>
                <th>Day </th>
                <th>Start_date </th>
                <th>End_date </th>
                <th>Action </th>
                </tr>
               </thead>
               <tbody>
                    @foreach ($event as $item)
                <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->title}}</td>
                <td>{{$item->month}}</td>
                <td>{{$item->day}}</td>
                <td>{{$item->start_date}}</td>
                <td>{{$item->end_date}}</td>
       <td>

           <a name="" id="" class="btn btn-success btn-sm" href="{{ route('events.edit', $item->id)}}" role="button" >Edit</a>
           <a name="" id="" class="btn btn-danger btn-sm" href="{{ route('events.delete', $item->id) }}" role="button" >Delete</a>

         </td>
         @endforeach


       </tbody>
     </table>
    </div>
   </div>
  <div class="col-md-3">
       <div class="cardt rounded-0 shadow" id="formm">
         <div class="card-header bg-gradient bg-primary text-light">
           <h5 class="card-title">Add Event</h5>
         </div>
         <div class="card-body">
           <div class="container-fluid">

             <form action="{{ route('events.store') }}" method="POST" id="schedule-form">
              @csrf
                <input type="hidden" name="id" id="id" value="">
                 <div class="form-group mb-2">
                  <label for="title" class="control-label">Title</label>
                  <input type="text" class="form-control form-control-sm rounded-0"  name="title" id="title" required>
                  </div>
                  <div class="form-group mb-2">
                     <label for="month" class="control-label">Month</label>
                     <input type="text" class="form-control form-control-sm rounded-0"  name="month" id="month" required>
                  </div>
                  <div class="form-group mb-2">
                      <label for="day" class="control-label">Day</label>
                      <input type="text" class="form-control form-control-sm rounded-0" name="day" id="day" required>
                  </div>
                    <div class="form-group mb-2">
                         <label for="start_datetime" class="control-label">Start_date</label>
                          <input type="datetime-local" class="form-control form-control-sm rounded-0"  name="start_date" id="start" required>
                     </div>
                 <div class="form-group mb-2">
                           <label for="end_datetime" class="control-label">End_date</label>
                            <input type="datetime-local" class="form-control form-control-sm rounded-0"  name="end_date" id="end_date" required>
                    </div>

                   </form>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="text-center">
                            <button class="btn btn-primary btn-sm rounded-0" type="submit" name="submit" form="schedule-form"><i class="fa fa-save"></i> Save</button>
                            <button class="btn btn-default border btn-sm rounded-0" type="reset" form="schedule-form"><i class="fa fa-reset"></i> Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


 <!--   <div class="modal" tabindex="-1" data-bs-backdrop="static" id="event-details-modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-0">
                <div class="modal-header rounded-0">
                    <h5 id="title" class="title">Edite</h5>
                </div>
                <div class="modal-body rounded-0">
                    <div class="container-fluid">

                                    <form  action="" method="POST" id="schedule-form">
                                            @csrf
                                                 @method('PUT')
                                                 <input type="hidden" name="id" id="id" value="">
                                                  <div class="form-group mb-2">
                                                   <label for="title" class="control-label">Title</label>
                                                   <input type="text" class="form-control form-control-sm rounded-0" value="" name="title" id="title" required>
                                                   </div>
                                                   <div class="form-group mb-2">
                                                      <label for="month" class="control-label">Month</label>
                                                      <input type="text" class="form-control form-control-sm rounded-0" value="" name="month" id="month" required>
                                                   </div>
                                                   <div class="form-group mb-2">
                                                       <label for="day" class="control-label">Day</label>
                                                       <input type="text" class="form-control form-control-sm rounded-0" value="" name="day" id="day" required>
                                                   </div>
                                                     <div class="form-group mb-2">
                                                          <label for="start_datetime" class="control-label">Start_date</label>
                                                           <input type="datetime-local" class="form-control form-control-sm rounded-0" value="" name="start_date" id="start_date" required>
                                                      </div>
                                                  <div class="form-group mb-2">
                                                            <label for="end_datetime" class="control-label">End_date</label>
                                                             <input type="datetime-local" class="form-control form-control-sm rounded-0" value="" name="end_date" id="end_date" required>
                                                     </div>

                                                    </form>
                                </div>
                    </div>
                <div class="modal-footer rounded-0">
                    <div class="text-end">
                        <button class="btn btn-primary btn-sm rounded-0" type="submit" name="submit" form="schedule-form"><i class="fa fa-save"></i> Save</button>
                        <button type="button" class="btn btn-danger btn-sm rounded-0" onclick="cancelEdit()" type="submit" name="submit"  id="cancelbutton" data-id="">Cancel</button>
                    </div>
                </div>
               </div>
            </div>
        </div>
    </div>
-->

</body>
<script>
var Title = document.getElementById("title");
var editButton = document.getElementById("edit-button");
var saveButton = document.getElementById("save-button");
var cancelButton = document.getElementById("cancelbutton");
var editform=document.getElementById("event-details-modal");

// عند الضغط على زر الإضافة، قم بإظهار النموذج
/*
editButton.addEventListener("click", function() {
    addForm.style.display = "block";
    Title.innerHTML="Edite";

});
*/
function cancelEdit() {
    var editform=document.getElementById("event-details-modal");
    editForm.style.display = "none";
}

// عند الضغط على زر الإلغاء، قم بإخفاء النموذج
cancelButton.addEventListener("click", function() {
    editform.style.display = "none";
});

function displayEditForm() {

    var editform=document.getElementById("event-details-modal");
    var table = document.querySelector("table");
    table.addEventListener("click", function(e) {
        if (e.target.tagName === "TD") {
           /* var rowData = e.target.parentNode.childNodes;
            var id = rowData[0].innerText;
            var title = rowData[1].innerText;
            var month = rowData[2].innerText;
            var day = rowData[3].innerText;
            var start = rowData[4].innerText;
            var end = rowData[5].innerText;*/
            editform.style.display="block";
        }
    });
}

// إلغاء التعديل وإخفاء نموذج التعديل

// عند الضغط على زر الحفظ، قم بتنفيذ العملية المرغوبة (مثل حفظ البيانات في قاعدة البيانات)
</script>
<script>
</script>
<script src="./js/script.js"></script>

</html>

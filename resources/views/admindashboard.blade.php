<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- font-awesom -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/brands.min.css" integrity="sha512-G/T7HQJXSeNV7mKMXeJKlYNJ0jrs8RsWzYG7rVACye+qrcUhEAYKYzaa+VFy6eFzM2+/JT1Q+eqBbZFSHmJQew==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <!-- link -->
      <link rel="stylesheet" href="{{url('css/responsive.css')}}">
      <link rel="stylesheet" href="{{url('css/bookplace.css')}}">
      <link rel="stylesheet" href="{{url('css/admindashboard.css')}}">
      <!-- datatables -->
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-3.6.0/dt-1.11.3/datatables.min.css"/>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.5/dist/sweetalert2.min.css">
      <title>Document</title>
   </head>
   <body>
      <div class="top">
         <header class="header">
            <div class="header-1">
               <a href="#" class="logo"> <i class="fas fa-book"></i> library </a>
               <form action="" class="search-form">
                  <input type="search" name="searshtext" placeholder="Searsh here" id="searchInput">
                  <label for="search-box" class="fas fa-search"></label>
               </form>
               <div class="icons" id="header-icons">
                  <div id="search-btn" class="fas fa-search"></div>
                  <a href="#" class="fas fa-heart"></a>
                  <a href="{{url('bookplace')}}" class="fas fa-table-columns"></a>
                  <a href="#" id="theme-switcher" class="fas fas fa-circle-half-stroke"></a>
                  <a href="{{url('logout')}}" class="fas fas fa-right-from-bracket"></a>
               </div>
            </div>
         </header>
      </div>
      <section class="main">
         <div class="welcome">
            <h1>Welcome back , {{ Auth::user()->name }}</h1>
         </div>
         <div class="cards">
            <div class="card" id="students">
               <div class="title">
                  <a href="#" class="fas fa-users"></a>
                  <h3>Students</h3>
               </div>
               <div class="counter">
                  <h3>{{ $numberOfStu - 1 }}</h3>
               </div>
            </div>
            <div class="card" id="books">
               <div class="title">
                  <a href="#" class="fas fa-book"></a>
                  <h3>Books</h3>
               </div>
               <div class="counter">
                  <h3>{{ $numberOfBooks }}</h3>
               </div>
            </div>
            <div class="card" id="requests">
               <div class="title">
                  <a href="#" class="fas fa-list-check"></a>
                  <h3>Requests</h3>
               </div>
               <div class="counter">
                  <h3>{{ $numberOfCommands }}</h3>
               </div>
            </div>
            <div class="card" id="statistiques">
               <div class="title">
                  <a href="#" class="fas fa-chart-simple"></a>
                  <h3>statistiques</h3>
               </div>
               <div class="counter">
                  <h3></h3>
               </div>
            </div>
         </div>
         <div class="text">
            <h2>choose frome the categories</h2>
         </div>
         <!-- student table -->
         <div class="students">
            <a href="#" class="fas fa-student fa-plus" onclick="open_add_student()">
               <h2>Add Student</h2>
            </a>
            <table id="studentsTable">
               <thead>
                  <tr>
                     <th>Id</th>
                     <th>Name</th>
                     <th>Email</th>
                     <th>Created at</th>
                     <th>updated_at</th>
                     <th>edit</th>
                     <th>Delete</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach($students as $student)
                  <tr>
                     <td>{{$student['id']}}</td>
                     <td>{{$student['name']}}</td>
                     <td>{{$student['email']}}</td>
                     <td>{{$student['created_at']}}</td>
                     <td>{{$student['updated_at']}}</td>
                     <td>
                        <a href="#" onclick="open_update_student()" idstudent="{{$student['id']}}" namestudent="{{$student['name']}}" emailstudent="{{$student['email']}}" class="btnupdate btnEdit"><i class="fa-solid fa-pen-to-square"></i></a>
                     </td>
                     <td>
                     <a href="{{ url('deletestudent/'.$student['id']) }}" onclick="confirmDeleteStudent({{$student['id']}})"><i class="fa-solid fa-trash"></i></a>
                     </td>
                  </tr>
                  @endforeach
               </tbody>
            </table>
         </div>
         <!-- add student -->
         <div class="form-popup" id="add">
            <form action="" class="form-container" method="post">
               <div class="title">
                  <h2>Add Student</h2>
                  <a onclick="close_add_student()" href="#"><i class="fa-solid fa-xmark"></i></a>
               </div>
               <div style="color:red;">
                  @foreach($errors->all() as $error)
                  {{$error}}<br>
                  @endforeach
               </div>
               @csrf
               <input type="text" class="field" id="name" name="name" placeholder="Your Name Here">
               <input type="email" class="field" id="email" name="email" placeholder="E-mail">
               <input type="password" class="field" id="password" name="password" placeholder="Your Password">
               <button type="submit" class="btn">Add</button>
            </form>
         </div>
         <!-- update student -->
         <div class="form-popup" id="update">
            <form action="{{ route('update', $student->id) }}" class="form-container" method="post">
               <div class="title">
                  <h2>Update Student</h2>
                  <a onclick="close_update_student()" href="#"><i class="fa-solid fa-xmark"></i></a>
               </div>
               <div style="color:red;">
                  @foreach($errors->all() as $error)
                  {{$error}}<br>
                  @endforeach
               </div>
               @csrf
               <input type="hidden" name="_method" value="PUT">
               <input type="hidden" name="id" value="" id="idupdate" >
               <input type="text" class="field" id="namestudent" name="name" placeholder="Change Name" value="">
               <input type="email" class="field" id="emailstudent" name="email" placeholder="Change Email" value="">
               <input type="password" class="field" id="password" name="password" placeholder="Change Password">
               <button type="submit" class="btn">Update</button>
            </form>
         </div>
         <!-- books table -->
         <div class="books">
            <a href="#" class="fas fa-student fa-plus" onclick="open_add_book()">
               <h2>Add Book</h2>
            </a>
            @if(isset($books))
            <table id="book-table">
               <thead>
                  <tr>
                     <th>id</th>
                     <th>Name</th>
                     <th>Quantity</th>
                     <th>Img</th>
                     <th>Info</th>
                     <th>Type</th>
                     <th>Edit</th>
                     <th>Delete</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach($books as $book)
                  <tr class="book->type->{{ $book->type->id }}">
                     <td>{{ $book->id }}</td>
                     <td>{{ $book->name }}</td>
                     <td>{{ $book->quantity }}</td>
                     <td><img src="{{ asset('img/' . $book->img) }}" alt="" style="width:50px"></td>
                     <td>{{ $book->info }}</td>
                     <td>{{ $book->type->name}}</td>
                     <td>
                        <a href="#" onclick="open_update_book()" idbook="{{$book['id']}}" namebook="{{$book['name']}}" quantitybook="{{$book['quantity']}}" infobook="{{$book['info']}}" class="btnupdate btnEdit"><i class="fa-solid fa-pen-to-square"></i></a>
                     </td>
                     <td>
                        <a id="deletebtn" href={{"deletebook/".$book['id']}}><i class="fa-solid fa-trash"></i></a>
                     </td>
                  </tr>
                  @endforeach
               </tbody>
            </table>
            @endif
         </div>
         <!-- add book -->
         <div class="form-popup" id="addbook">
            <form action="{{ url('admindashboard/addbook') }}" class="form-container" method="post" enctype="multipart/form-data">
               <div class="title">
                  <h2>Add book</h2>
                  <a onclick="close_add_book()" href="#"><i class="fa-solid fa-xmark"></i></a>
               </div>
               <div style="color:red;">
                  @foreach($errors->all() as $error)
                  {{$error}}<br>
                  @endforeach
               </div>
               @csrf
               <input type="text" class="field" id="name" name="name" placeholder="Book Name Here">
               <input type="number" class="field" id="quantity" name="quantity" placeholder="Book Quantity Here">
               <input type="text" name="info" id="info" placeholder="Book Information Here">
               <select class="field" id="type" name="type">
                  <option value="">Book Type Here</option>
                  <option value="1">Adventure stories</option>
                  <option value="2">Classics</option>
                  <option value="3">Crime</option>
                  <option value="4">Horror</option>
                  <option value="5">War</option>
                  <option value="6">Biography</option>
                  <option value="7">Short stories</option>
                  <option value="8">Fantasy</option>
                  <option value="9">Comedy</option>
               </select>
               <input type="file" name="img" id="fileToUpload" accept="image/*">
               <button type="submit" class="btn">Add</button>
            </form>
         </div>
         <!-- update book -->
         <div class="form-popup" id="updatebook">
            <form action="{{ route('bookupdate', ['id' => $book->id]) }}" class="form-container" method="post">
               <div class="title">
                  <h2>Update Book</h2>
                  <a onclick="close_update_book()" href="#"><i class="fa-solid fa-xmark"></i></a>
               </div>
               <div style="color:red;">
                  @foreach($errors->all() as $error)
                  {{$error}}<br>
                  @endforeach
               </div>
               @csrf
               @method('PUT')
               <input type="hidden" name="_method" value="PUT">
               <input type="hidden" name="id" value="" id="idupdatebook" >
               <input type="text" class="field" id="namebook" name="name" placeholder="Book Name Here">
               <input type="number" class="field" id="quantitybook" name="quantity" placeholder="Book Quantity Here">
               <input type="text" name="info" id="infobook" placeholder="Book Information Here">
               <select class="field" id="typebook" name="type">
                  <option value="">Book Type Here</option>
                  <option value="1">Adventure stories</option>
                  <option value="2">Classics</option>
                  <option value="3">Crime</option>
                  <option value="4">Horror</option>
                  <option value="5">War</option>
                  <option value="6">Biography</option>
                  <option value="7">Short stories</option>
                  <option value="8">Fantasy</option>
                  <option value="9">Comedy</option>
               </select>
               <input type="file" id="imgbook" name="img" id="fileToUpload" accept="image/*">
               <button type="submit" class="btn">Update</button>
            </form>
         </div>
         <div class="requests">
            <table id="command-table">
               <thead>
                  <tr>
                     <th>id</th>
                     <th>student</th>
                     <th>email</th>
                     <th>book</th>
                     <th>Command at</th>
                     <th>Accept</th>
                     <th>Decline</th>
                  </tr>
               </thead>
               <tbody>
               @foreach($commands as $command)
                  <tr>
                     <td>{{ $command->id }}</td>
                     <td>{{ $command->student->name }}</td>
                     <td>{{ $command->student->email }}</td>
                     <td>{{ $command->book->name }}</td>
                     <td>{{ $command->Command_at }}</td>
                     <td>
                        <a href="#" onclick="open_accept()"><i class="fa-solid fa-check"></i></a>
                     </td>
                     <td>
                        <form method="POST" action="{{ route('command.decline') }}">
                        @csrf
                           <input type="hidden" name="command_id" value="{{ $command->id }}">
                           <button type="submit"><i class="fa-solid fa-x"></i></button>
                        </form>
                     </td>
                  </tr> 
                @endforeach
               </tbody>
            </table>
            <!-- accept command -->
            <div class="form-popup" id="accept" style="width:75%;">
            <form action="{{ route('command.accept') }}" class="form-container" method="post">
               <div class="title">
                  <h2>Accept Command</h2>
                  <a onclick="close_accept()" href="#"><i class="fa-solid fa-xmark"></i></a>
               </div>
               <div style="color:red;">
                  @foreach($errors->all() as $error)
                  {{$error}}<br>
                  @endforeach
               </div>
               @csrf
               @if(isset($command))
                  <input type="hidden" name="id" value="{{ $command->id }}" id="idcommand">
                  <label for="name">Student Name</label>
                  <input type="text" class="field" id="namestudent" name="name" placeholder="Student Name" value="{{ $command->student->name }}" disabled>
                  <label for="book">Book Name</label>
                  <input type="text" class="field" id="namebook" name="book" placeholder="Book Name" value="{{ $command->book->name }}" disabled>
               @endif
               <label for="delivery">Delivery At</label>
               <input type="date" class="field" id="delivery" name="delivery" placeholder="delivery at" value="">
               <label for="delivery">Return At</label>
               <input type="date" class="field" id="return" name="return" placeholder="Return at" value="">
               <button type="submit" class="btn">Accept</button>
            </form>
         </div>
            <table id="approval-table">
               <thead>
                  <tr>
                     <th>id</th>
                     <th>student</th>
                     <th>book</th>
                     <th>delivery at</th>
                     <th>returns at</th>
                     <th>Status</th>
                     <th>delete</th>
                     <th>Edit</th>
                  </tr>
               </thead>
               <tbody>
               @foreach($approvals as $approval)
                  <tr>
                     <td>{{ $approval->id }}</td>
                     <td>{{ $approval->student->name }}</td>
                     <td>{{ $approval->book->name }}</td>
                     <td>{{ $approval->delivery_at }}</td>
                     <td>{{ $approval->returns_at }}</td>
                     <td>{{ $approval->status->name }}</td>
                     <td>
                        <a id="deletebtn" href="{{"deleteapproval/".$approval['id']}}"><i class="fa-solid fa-trash"></i></a>
                     </td>
                     <td>
                        <a href="#" idapproval="{{$approval['id']}}" a_namestudent="{{ $approval->student->name }}" a_namebook="{{ $approval->book->name }}" onclick="open_update_approval()" class="btnupdate btnEdit"><i class="fa-solid fa-pen-to-square"></i></a>
                     </td>
                  </tr>
               @endforeach
               </tbody>
            </table>
            <!-- update approval -->
         <div class="form-popup" id="updateapproval" style="width:75%;">
            <form action="{{ route('updateapproval') }}" class="form-container" method="post">
               <div class="title">
                  <h2>Update Approval</h2>
                  <a onclick="close_updateapproval()" href="#"><i class="fa-solid fa-xmark"></i></a>
               </div>
               <div style="color:red;">
                  @foreach($errors->all() as $error)
                  {{$error}}<br>
                  @endforeach
               </div>
               @csrf
               @if(isset($approval))
                  <input type="hidden" name="id" value="" id="idapproval">
                  <label for="name">Student Name</label>
                  <input type="text" class="field" id="a_namestudent" value="" name="name" placeholder="Student Name" disabled>
                  <label for="book">Book Name</label>
                  <input type="text" class="field" id="a_namebook" name="book" placeholder="Book Name" value="" disabled>
                  <label for="delivery">Delivery At</label>
                  <input type="date" class="field" id="a_deliveredat" name="delivery_at" placeholder="delivery at" value="{{ $approval->delivery_at }}">
                  <label for="delivery">Return At</label>
                  <input type="date" class="field" id="return" name="returns_at" placeholder="return at" value="{{ $approval->return_at }}">
                  <select class="field" id="typebook" name="id_status">
                     <option value="">Choose status</option>
                     <option value="1">Delivered</option>
                     <option value="2">Under Processing</option>
                     <option value="3">Exeption</option>
                     <option value="4">Rejected</option>
                     <option value="5">Accepted</option>
                     <option value="6">Returned</option>
                  </select>
                  <button type="submit" class="btn">Update</button>
               @endif
            </form>
         </div>
         </div>
         <div class="statistiques">
            <h1>statistiques</h1>
            <canvas id="myChart" height="100px"></canvas>
            <canvas id="myChart_2" width="50px"></canvas>
         </div>
      </section>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.5/dist/sweetalert2.min.js"></script>
      <script src="{{url('js/admindashboard.js')}}"></script>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-3.6.0/dt-1.11.3/datatables.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
      <script>
         $(document).ready(function() {
           $("#students").click(function() {
             $(".students").show();
             $(".books, .requests, .text , .statistiques").hide();
           });
           $("#books").click(function() {
             $(".books").show();
             $(".students, .requests, .text , .statistiques").hide();
           });
           $("#requests").click(function() {
             $(".requests").show();
             $(".students, .books, .text , .statistiques").hide();
           });
           $("#statistiques").click(function() {
             $(".statistiques").show();
             $(".students, .books, .text , .requests").hide();
           });
         });
         function open_add_student() {
         document.getElementById("add_student").style.display = "block";
         }
         
         function close_add_student() {
         document.getElementById("add_student").style.display = "none";
         }
         
         function open_add_book() {
         document.getElementById("addbook").style.display = "block";
         }
         
         function close_add_book() {
         document.getElementById("addbook").style.display = "none";
         }
         
         
         function open_add_student() {
         document.getElementById("add").style.display = "block";
         }
         
         function close_add_student() {
         document.getElementById("add").style.display = "none";
         }
         
         function open_update_student() {
         document.getElementById("update").style.display = "block";
         
         }
         
         $(".btnEdit").click(function(){
         //update student
         $("#idupdate").val($(this).attr("idstudent"));
         $("#namestudent").val($(this).attr("namestudent"));
         $("#emailstudent").val($(this).attr("emailstudent"));
         //update book
         $("#idupdatebook").val($(this).attr("idbook"));
         $("#namebook").val($(this).attr("namebook"));
         $("#quantitybook").val($(this).attr("quantitybook"));
         $("#infobook").val($(this).attr("infobook"));
         //update book
         $("#idapproval").val($(this).attr("idapproval"));
         $("#a_namestudent").val($(this).attr("a_namestudent"));
         $("#a_namebook").val($(this).attr("a_namebook"));
         });
         
         
         function close_update_student() {
         document.getElementById("update").style.display = "none";
         }
         
         function open_update_book() {
         document.getElementById("updatebook").style.display = "block";
         
         }
         function close_update_book() {
         document.getElementById("updatebook").style.display = "none";
         }

         function open_accept() {
         document.getElementById("accept").style.display = "block";
         }
         
         function close_accept() {
         document.getElementById("accept").style.display = "none";
         }

         function open_update_approval() {
         document.getElementById("updateapproval").style.display = "block";
         }
         
         function close_updateapproval() {
         document.getElementById("updateapproval").style.display = "none";
         }
      </script>
      <script>
         document.getElementById('searchInput').addEventListener('input', function() {
           let filter = this.value.toLowerCase();
           let rows = document.getElementById('book-table').rows;
           for (let i = 1; i < rows.length; i++) {
             let nameValue = rows[i].cells[1].innerText.toLowerCase();
             let quantityValue = rows[i].cells[2].innerText.toLowerCase();
             let typeValue = rows[i].cells[5].innerText.toLowerCase();
             if (nameValue.indexOf(filter) > -1 || quantityValue.indexOf(filter) > -1 || typeValue.indexOf(filter) > -1) {
               rows[i].style.display = '';
             } else {
               rows[i].style.display = 'none';
             }
           }
         });
         
         $(document).ready(function() {
            var bookTable = $('#book-table').DataTable({
               "autoWidth": false,
               "paging": true,
               "ordering": true,
               "searching": false,
               "info": true,
               "lengthMenu": [[5, 10, 25, -1], [5, 10, 25, "All"]],
               "language": {
                  "paginate": {
                     "first": "First",
                     "last": "Last",
                     "next": "Next",
                     "previous": "Previous"
                  },
                  "search": "Search:",
                  "lengthMenu": "_MENU_ records per page"
               }
            });
         
            var studentsTable = $('#studentsTable').DataTable({
               "autoWidth": false,
               "paging": true,
               "ordering": true,
               "searching": false,
               "info": true,
               "lengthMenu": [[5, 10, 25, -1], [5, 10, 25, "All"]],
               "language": {
                  "paginate": {
                     "first": "First",
                     "last": "Last",
                     "next": "Next",
                     "previous": "Previous"
                  },
                  "search": "Search:",
                  "lengthMenu": "_MENU_ records per page"
               }
            });
         
            // You can use the destroy() method to remove the DataTables instance
            // and then initialize it again with updated configuration.
            // For example, you can update the "lengthMenu" option to show different
            // page lengths.
            $('#show-all-records').on('click', function() {
               bookTable.destroy();
               studentsTable.destroy();
               bookTable = $('#book-table').DataTable({
                  "autoWidth": false,
                  "paging": true,
                  "ordering": true,
                  "searching": true,
                  "info": true,
                  "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
                  "language": {
                     "paginate": {
                        "first": "First",
                        "last": "Last",
                        "next": "Next",
                        "previous": "Previous"
                     },
                     "search": "Search:",
                     "lengthMenu": "_MENU_ records per page"
                  }
               });
               studentsTable = $('#studentsTable').DataTable({
                  "autoWidth": false,
                  "paging": true,
                  "ordering": true,
                  "searching": true,
                  "info": true,
                  "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
                  "language": {
                     "paginate": {
                        "first": "First",
                        "last": "Last",
                        "next": "Next",
                        "previous": "Previous"
                     },
                     "search": "Search:",
                     "lengthMenu": "_MENU_ records per page"
                  }
               });
            });
         });
         
      </script>
      <script>
         $(document).ready(function() {
               $('#command-table').DataTable();
            } );
         $(document).ready(function() {
               $('#approval-table').DataTable();
            } );
      </script>
      <script>
// Wait for document to load
    // Wait for document to load
            document.addEventListener("DOMContentLoaded", function(event) {
  // Get the saved theme from localStorage, if available
         var savedTheme = localStorage.getItem("theme");

  // Set the default theme to `light` if no saved theme is found
         var currentTheme = savedTheme ? savedTheme : "light";
         document.documentElement.setAttribute("data-theme", currentTheme);

  // Get our button switcher
         var themeSwitcher = document.getElementById("theme-switcher");

  // When our button gets clicked
         themeSwitcher.onclick = function() {
    // Switch between `dark` and `light`
            var switchToTheme = currentTheme === "dark" ? "light" : "dark"

    // Set our current theme to the new one
            document.documentElement.setAttribute("data-theme", switchToTheme);

    // Save the selected theme to localStorage
            localStorage.setItem("theme", switchToTheme);

    // Update the currentTheme variable
            currentTheme = switchToTheme;
         }
         });

   </script>
   <script>
function confirmDeleteStudent(id) {
   function confirmDeleteStudent(id) {
  Swal.fire({
    title: 'Are you sure?',
    text: "You won't be able to revert this!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, delete it!'
    
  }).then((result) => {
    if (result.isConfirmed) {
      window.location.href = "/deletestudent/" + id;
    }
  });
}

</script>

      <style>
   .form-container input[type=text], .form-container input[type=password] , .form-container input[type=email] , .form-container input[type=number] , .form-container input[type=file] , .form-container input[type=date] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

select.field {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}
label {
  font-size: 1.5rem;
}
</style>
<script>
       var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            datasets: [{
                label: 'number of Approvals',
                data: [12, 19, 3, 5, 2, 3, 7],
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 1
            },
            {
                label: 'number of Books',
                data: [8, 15, 9, 12, 4, 6, 10],
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
<script>
       var ctx = document.getElementById('myChart_2').getContext('2d');
    var myChart_2 = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            datasets: [{
                label: 'number of Approvals',
                data: [12, 19, 3, 5, 2, 3, 7],
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 1
            },
            {
                label: 'number of Books',
                data: [8, 15, 9, 12, 4, 6, 10],
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
</body>
</html>
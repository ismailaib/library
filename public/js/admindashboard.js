$(document).ready(function() {
  $("#students").click(function() {
    $(".students").show();
    $(".books, .requests, .text").hide();
  });
  $("#books").click(function() {
    $(".books").show();
    $(".students, .requests, .text").hide();
  });
  $("#requests").click(function() {
    $(".requests").show();
    $(".students, .books, .text").hide();
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
//update student
$("#idupdatebook").val($(this).attr("idbook"));
$("#namebook").val($(this).attr("namebook"));
$("#quantitybook").val($(this).attr("quantitybook"));
$("#infobook").val($(this).attr("infobook"));
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



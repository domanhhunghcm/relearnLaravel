<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">    
</head>
<body>
    <section style="padding: 50px">
        <div class="controller">
            <div class="row">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header">
                            Books Name  <a href="#" class="btn btn-success"  data-toggle="modal" data-target="#bookModal">Add book</a>
                            <a href="javascript:void(0)" class="btn btn-danger" id="deleteAll">Delete books</a>
                        </div>
                        
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th><input type="checkbox" name="checkAll" id="checkAll"></th>
                                    <th scope="col">#</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last NAme</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Delete</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  {{$a=0}}
                                  @foreach($books as $book)
                                  <tr id="sid{{$book->id}}">
                                    <th><input type="checkbox" name="checkId" class="checkBook" id="checkId" value="{{$book->id}}"></th>
                                    <th scope="row">{{$a++}}</th>
                                    <td>{{$book->firstName}}</td>
                                    <td>{{$book->lastName}}</td>
                                    <td>{{$book->email}}</td>
                                    <td>{{$book->phone}}</td>
                                    <td><a href="javascript:void(0)" onclick="editSave({{$book->id}})" style="float: right" class="btn btn-success">Edit</a></td>
                                    <td><a href="javascript:void(0)" onclick="deleteSave({{$book->id}})" style="float: right" class="btn btn-danger">Delete</a></td>
                                  </tr>
                                  @endforeach
                                  
                                </tbody>
                              </table>  
                        </div>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </section>
  
  <!-- Modal -->
  <div class="modal fade" id="bookModal" tabindex="-1" role="dialog" aria-labelledby="bookModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="bookModalLabel">Add form</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form id="bookForm">
              @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">First Name</label>
                  <input type="text" class="form-control" id="firstName" name="firstName" aria-describedby="emailHelp" placeholder="Enter First Name">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Last Name</label>
                  <input type="text" class="form-control" id="lastName" name="lastName" placeholder="last name">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Email</label>
                  <input type="text" class="form-control" id="email" name="email" placeholder="email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Phone</label>
                  <input type="text" class="form-control" id="phone" name="phone" placeholder="phone">
                </div>
                <button type="submit" style="float: right" class="btn btn-primary">Submit</button>
              </form>
        </div>
      </div>
    </div>
  </div>

    <!-- Edit Modal -->
    <div class="modal fade" id="bookEditModal" tabindex="-1" role="dialog" aria-labelledby="bookModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Edit form</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              <form id="bookEditForm">
                @csrf
                  <div class="form-group">
                    <label for="exampleInputEmail1">First Name</label>
                    <input type="text" class="form-control" id="firstNameEdit" name="firstNameEdit" aria-describedby="emailHelp" placeholder="Enter First Name">
                    <input type="hidden" class="form-control" id="idEdit" name="idEdit" aria-describedby="emailHelp" placeholder="Enter First Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Last Name</label>
                    <input type="text" class="form-control" id="lastNameEdit" name="lastNameEdit" placeholder="last name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="text" class="form-control" id="emailEdit" name="emailEdit" placeholder="email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Phone</label>
                    <input type="text" class="form-control" id="phoneEdit" name="phoneEdit" placeholder="phone">
                  </div>
                  <button type="submit" style="float: right" class="btn btn-primary">Submit</button>
                </form>
          </div>
        </div>
      </div>
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
  $("#bookEditForm").submit(function (e) { 
    e.preventDefault();
    let firstName=$("#firstNameEdit").val();
    let lastName=$("#lastNameEdit").val();
    let email=$("#emailEdit").val();
    let phone=$("#phoneEdit").val();
    let id=$("#idEdit").val();
    let _token=$("input[name=_token]").val();
    $.ajax({
      type: "post",
      url: "{{route('BookController.saveChange')}}",
      data: {
        firstName:firstName,
        lastName:lastName,
        email:email,
        phone:phone,
        id:id,
        _token:_token,
      },
      success: function (response) {
        if (response) {
          // $("tbody").prepend("<tr>"+"<td>"+0+"</td>"+"<td>"+response.firstName+"</td>"+"<td>"+response.lastName+"</td>"+"<td>"+response.email+"</td>"+"<td>"+response.phone+"</td>"+"</tr>");
          // $("#bookForm")[0].reset();
          // $("#bookModal").modal("hide");
          console.log(response);
          $("#sid"+response.id+" > td:nth-child(2)").text(response.firstName);
          $("#sid"+response.id+" > td:nth-child(3)").text(response.lastName);
          $("#sid"+response.id+" > td:nth-child(4)").text(response.email);
          $("#sid"+response.id+" > td:nth-child(5)").text(response.phone);
        }
      }
    });
   });


  $("#bookForm").submit(function (e) { 
    e.preventDefault();
    let firstName=$("#firstName").val();
    let lastName=$("#lastName").val();
    let email=$("#email").val();
    let phone=$("#phone").val();
    let _token=$("input[name=_token]").val();
    $.ajax({
      type: "post",
      url: "{{route('BookController.saveBook')}}",
      data: {
        firstName:firstName,
        lastName:lastName,
        email:email,
        phone:phone,
        _token:_token,
      },
      success: function (response) {
        if (response) {
          $("tbody").prepend("<tr>"+"<td>"+0+"</td>"+"<td>"+response.firstName+"</td>"+"<td>"+response.lastName+"</td>"+"<td>"+response.email+"</td>"+"<td>"+response.phone+"</td>"+"</tr>");
          $("#bookForm")[0].reset();
          $("#bookModal").modal("hide");
        }
      }
    });
   });
   
   function editSave($id) {
     $.ajax({
       type: "get",
       url: "getChange/"+$id,
       success: function (response) {
         if (response) {
           $("#firstNameEdit").val(response.firstName);
           $("#idEdit").val(response.id);
           $("#lastNameEdit").val(response.lastName);
           $("#emailEdit").val(response.email);
           $("#phoneEdit").val(response.phone);
           $("#bookEditModal").modal("show")
         }
       }
     });
     
    //  $.get( "getChange/", function( data ) {
    //   $( ".result" ).html( data );
    //   alert( "Load was performed." );
    // });
     
    }
    function deleteSave($id) {
      if (confirm("muốn xóa không")) {
        $.ajax({
         type: "delete",
         url: "deleteBook/"+$id,
         data: {
          _token:$("input[name=_token]").val()
         },
         success: function (response) {
          $("#sid"+$id).remove();
         }
       });
      }
      } 
    
  $("#checkAll").click(function(){
    $('.checkBook').each(function() {
        $(this).prop("checked",$("#checkAll").prop("checked"));
      });
  })
  $('.checkBook').click(function() {
    $("#checkAll").prop("checked",false);
  });

  $("#deleteAll").click(function (e) {
    e.preventDefault();
    var deleteArr=[];
    $("input[name=checkId]:checked").each(function () { 
      deleteArr.push($(this).val());
    });
    $.ajax({
      type: "delete",
      url: "deleteAll",
      data: {
        _token:$("input[name=_token]").val(),
        del:deleteArr
      },
      success: function (response) {
        $.each(deleteArr, function (indexInArray, valueOfElement) { 
           $("#sid"+deleteArr[indexInArray]).remove();
        });
      }
    });
  });
</script>
</html>
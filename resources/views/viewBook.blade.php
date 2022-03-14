<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
</head>
<body>
    <section style="padding: 50px">
        <div class="controller">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            Books Name  <a href="#" class="btn btn-success"  data-toggle="modal" data-target="#bookModal">Add book</a>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last NAme</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  {{$a=0}}
                                  @foreach($books as $book)
                                  <tr>
                                    <th scope="row">{{$a++}}</th>
                                    <td>{{$book->firstName}}</td>
                                    <td>{{$book->lastName}}</td>
                                    <td>{{$book->email}}</td>
                                    <td>{{$book->phone}}</td>
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
</body>

<script>
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
   })  
</script>
</html>
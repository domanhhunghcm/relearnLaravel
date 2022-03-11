<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Company</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <section style="padding: 60px">
        <div class="contronller">
            <div class="row">
                
                    <div class="card" style="padding:0px">
                        <div class="card-header">
                            
                            <div class="left" style="float:left">
                                All Company Name
                            </div> 
                            <div class="right" style="float:right">
                                <a class="btn btn-primary" href="/addStudentView" role="button">Add Button</a>
                            </div>
                        </div>
                        <div class="card-body">
                            @if(Session::has("delete_success"))
                                <div class="alert alert-success" role="alert">
                                    {{Session::get("delete_success")}}
                                </div>
                            @endif
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Company Name</th>
                                    <th scope="col">Company Image</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Delete</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach($companies as $key => $company)
                                        <tr>
                                            <th scope="row">{{$key+1}}</th>
                                            <td>{{$company->name}}</td>
                                            <td><img style="width: 185px;height: 130px;" src="{{asset('storage')}}/{{$company->imageData}}" alt=""></td>
                                            <td><a class="btn btn-success" href="/viewEdit/{{$company->id}}" role="button">Edit Button</a></td>
                                            <td><a class="btn btn btn-danger" href="/deleteComp/{{$company->id}}" role="button">Delete Button</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                              </table>
                        </div>
                </div>
            </div>
            
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="card">
                    <div class="card-header">
                        Add Post
                        @if(Session::has("postSaved"))
                            <div class="alert alert-success" role="alert">
                                {{Session::get("postSaved")}}
                            </div>
                        @endif 
                        @if(Session::has("post_delete"))
                            <div class="alert alert-success" role="alert">
                                {{Session::get("post_delete")}}
                            </div>
                        @endif
                        <a href="/viewAdd" class="btn btn-primary">Add Post</a>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            @foreach($posts as $post)
                                <li class="list-group-item">
                                    <div class="before" style="width:20%;float:left">
                                        {{$post->id}}. {{$post->title}}
                                    </div>
                                    <div class="after" style="width:70%;float:right">
                                        <a href="/viewDetail/{{$post->id}}" class="btn btn-success">View detail</a>
                                        <a href="/viewDelete/{{$post->id}}" class="btn btn-danger">Delete Post</a>
                                        <a href="/edit/{{$post->id}}" class="btn btn-primary">Edit Post</a>
                                    </div>
                                </li>
                            @endforeach
                          </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
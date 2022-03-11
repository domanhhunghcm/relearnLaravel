<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Company</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <section style="padding: 60px">
        <div class="contronller">
            <div class="row">
                <div class="col-sm-6 offset-sm-3">
                    <div class="card">
                        <div class="card-header">
                            <div class="left" style="float:left">
                                Edit Company Name
                            </div> 
                            <div class="right" style="float:right">
                                <a class="btn btn-success" href="/displayAll" role="button">View All</a>
                            </div>
                        </div>
                        <div class="card-body">
                            @if(Session::has("edit_success"))
                                <div class="alert alert-success" role="alert">
                                    {{Session::get("edit_success")}}
                                </div>
                            @endif
                            <form action="{{route('companies.editStore')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label">Company Name</label>
                                    <input type="text" class="form-control" name="companyName" id="companyName" value="{{$getComp->name}}" placeholder="name@example.com">
                                    <input type="hidden" class="form-control" name="compId" id="compId" value="{{$getComp->id}}" placeholder="name@example.com">
                                  </div>
                                  <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Company Image</label>
                                    <input class="form-control"  type="file" name="companyImage" id="companyImage"  value="{{$getComp->imageData}}"  onchange="changeImg(this)">
                                    <img src="{{asset('storage')}}/{{$getComp->imageData}}" id="previewImg" style="max-width: 130px;margin-top:10px" alt="">
                                  </div>
                                  <button type="submit" class="btn btn-primary mb-3">Save</button>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        function changeImg(input) {
            var file=$("input[type=file]").get(0).files[0];
            var fileImg=$("#previewImg");
            var reader = new FileReader();
            if(file){
                console.log("hung do");
                reader.onload=function(){
                    $("#previewImg").attr("src",reader.result)
                }
                reader.readAsDataURL(file);
            }
        }
    </script>
</body>
</html>
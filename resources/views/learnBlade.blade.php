<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>learning blade</h1>
    @php 
        $name="hungDo";
        $arrayFruit=array("banana","apple","frutis");
        $age=18;
        $age2=21;
    @endphp
    <h3>{{$name}}</h3>
    <ul>
        @foreach($arrayFruit as $fruit)
            <li>{{$fruit}}</li>
        @endforeach
    </ul>
    @for($i=1;$i<10;$i++)
        <h5>{{$i}}</h5>
    @endfor

    @if($age==14)
        <h1>14 tuoi</h1>
    @elseif($age<14)
        <h1>nho hon 14 tuoi</h1>
    @else
        <h1>lon hon 14 tuoi</h1>
    @endif
    {{$age2==20?"dohung bang 20 tuoi":"khac 20 tuoi"}}
</body>
</html>
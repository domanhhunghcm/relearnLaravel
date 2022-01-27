<div>
    <!-- It is not the man who has too little, but the man who craves more, that is poor. - Seneca -->
    <h4>do hung componet</h4>
    <h2>have data frome welcome: {{$name}}</h2>
    <ul>
        @foreach ($arrayFruit as $fruit)
            <p>This is user {{ $fruit }}</p>
        @endforeach
    </ul>
</div>
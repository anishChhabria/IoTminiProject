<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name')}}</title>
    {{-- <link type="text/css" rel="stylesheet" href="{{asset('css/app.css')}}"/> --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <style>
    .flip-card {
    background-color: transparent;
    width: 300px;
    height: 200px;
    border: 1px solid #f1f1f1;
    perspective: 1000px; /* Remove this if you don't want the 3D effect */
    /* background-color: powderblue;  */
    padding: 5px;
    margin: 10px;

    }

    /* This container is needed to position the front and back side */
    .flip-card-inner {
    position: relative;
    width: 100%;
    height: 100%;
    text-align: center;
    border: 1px solid black;
    transition: transform 0.8s;
    transform-style: preserve-3d;
    }

    /* Do an horizontal flip when you move the mouse over the flip box container */
    .flip-card:hover .flip-card-inner {
    transform: rotateY(180deg);
    }

    /* Position the front and back side */
    .flip-card-front, .flip-card-back {
    position: absolute;
    width: 100%;
    height: 100%;
    backface-visibility: hidden;
    }

    /* Style the front side (fallback if image is missing) */
    .flip-card-front {
    /* background-color: #bbb; */
    color: black;
    padding:25%
    
    }

    /* Style the back side */
    .flip-card-back {
    /* background-color: dodgerblue; */
    /* color: white; */
    transform: rotateY(180deg);
    }
    #cont1{
        display: inline-flex;
    }

    </style>


</head>
<body>    
    <div class="container" >
            @if(Session::has('message'))
                <div class="alert alert-danger">
                        <button type="button" class="close" onclick = "reload()" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                <strong> {{ Session::get('message', '') }}</strong>
                </div>
            @endif
            <br>
            <div class="row">
                    <button class = "btn btn-primary" onclick="javascript:window.location.href='http:\/\/iot.com'"> Back </button>
            </div>
            
        {{-- <div class="container"> --}}


        <div id="cont1">
            @foreach ($locations as $location)
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            @if($location == 1)
                                <h4 class = "card-title" id = "chembur">Chembur</h4>
                            @elseif($location == 2)
                                <h4 class = "card-title" id = "ghatkhopar">Ghatkopar</h4>
                            @endif
                            
                        </div>
                        <div class="flip-card-back">
                                <p>Count of dustbin in the locality : {{$count}}</p>
                                <p class="card-text">Click the Link below to view the statsistics in detail.</p>
                                <a href="/stats/{{$location}}" class="card-link">Detailed Statistics</a>
                        </div>
                    </div>
                </div>        
            @endforeach
        </div>
    </div>
    <script>
        function reload(){
            document.location.reload();
        }
    </script>
    
    {{-- {{$statistics}} --}}
</body>
</html>

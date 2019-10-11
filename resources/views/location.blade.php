@extends('layouts.app')

@section('content')

<div class = "container">
    <div class ="row">
        <button style="margin:10px;" class = "btn btn-primary" onclick="javascript:window.location.href='http:\/\/iot.com/home'"> Back </button>
    </div> 
    <br>    
    <table class = "table table-striped table-hover ">
        <thead>
            <tr>
                <th>Dustbin ID</th>
                <th>Weight (gms)</th>
                {{-- <th>Time</th> --}}
                {{-- <th>Date</th> --}}
                {{-- <th>Year</th> --}}
                <th>Timestamp</th>
                <th>Status</th>
            </tr>
        </thead>    
            @foreach ($detailStats as $stats )
                @if($stats->weight > 500)    
                <tr style="background-color:red; opacity:0.5; color:white">
                    <td>{{$stats->uid}}</td>
                    <td>{{$stats->weight}}</td>
                    {{-- <td>{{$stats->time}}</td> --}}
                    {{-- <td>{{$stats->date}}</td> --}}
                    {{-- <td>{{$stats->year}}</td> --}}
                    <td>{{$stats->timestamp}}</td>
                    {{-- <td></td> --}}
                    <td>
                        @if($stats->weight > 500)
                            To be Cleaned
                        @else
                            Ok
                        @endif
                    </td>
                </tr>
                @else 
                <tr style="background-color:green; opacity:0.5; color:white">
                    <td>{{$stats->uid}}</td>
                    <td>{{$stats->weight}}</td>
                    {{-- <td>{{$stats->time}}</td> --}}
                    {{-- <td>{{$stats->date}}</td> --}}
                    {{-- <td>{{$stats->year}}</td> --}}
                    <td>{{$stats->timestamp}}</td>
                    {{-- <td></td> --}}
                    <td>
                        @if($stats->weight > 500)
                            To be Cleaned
                        @else
                            Ok
                        @endif
                    </td>
                </tr>
                @endif
            @endforeach
    </table>
    <canvas id="myCanvas"></canvas>     
</div>
    
    
    <script type="text/javascript" src="script.js">
        var myCanvas = document.getElementById("myCanvas");
        myCanvas.width = 300;
        myCanvas.height = 300;
    
        var ctx = myCanvas.getContext("2d");
    
        function back(){
            document.location('http://iot.com/dashboard');
        }
    </script>


@endsection
<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link type="text/css" rel="stylesheet" href="{{asset('css/app.css')}}"/> --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<title>{{config('app.name')}}</title>
</head>
<style>
.container{
    margin-top: 20px;
    background-color: ghostwhite;
    /* opacity: 0.5; */
}
</style>
<body>  
    <div class = "container">
    {{-- <h3>{{$detailStats->locationid}}</h3> --}}
        <br><br>

        <div class ="row">
            <button style="margin:10px;" class = "btn btn-primary" onclick="javascript:window.location.href='http:\/\/iot.com/dashboard'"> Back </button>
        </div> <br>    
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
</body>
</html>
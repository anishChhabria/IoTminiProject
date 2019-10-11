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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>

    .container{
        background-color: ghostwhite;
    }
    .flip-card {
    background-color: transparent;
    width: 300px;
    height: 200px;
    border: 1px solid #f1f1f1;
    perspective: 1000px; /* Remove this if you don't want the 3D effect */
    /* background-color: powderblue;  */
    padding: 5px;
    margin: 10px;
    background-color: white;

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

    /* Stylhe front side (fallback if image is missing) */
    .flip-card-front {
    /* background-color: #bbb; */
    color: black;
    padding:25%
    
    }

    /* Style the back side */
    .flip-card-back {
    /* background-color: dodgerblue; */
    /* color: white; */
    padding: 7%;
    transform: rotateY(180deg);
    }
    #cont1{
        display: inline-flex;
        text-align: center;
        
    }
    #graphDiv1{
        margin-left: 18%;
    }
    </style>

    <script src = "{{asset('js/bargraph.js')}}"></script>

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
                    <button style="margin:10px" class = "btn btn-primary" onclick="javascript:window.location.href='http:\/\/iot.com'"> Back </button>
            </div>
                      
            
    <div id="cont1">
                <div class = "row">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                    <h4 class = "card-title" id = "chembur">Chembur</h4>
                                
                            </div>
                            <div class="flip-card-back">
                                    <p>Count of dustbin in the locality : <div id ="value">{{$count['1'][0]->count}}</div> </p>
                                    <p class="card-text">Click the Link below to view the statsistics in detail.</p>
                                    <a href="/stats/1" class="card-link">Detailed Statistics</a>
                            </div>
                        </div>
                    </div>        
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                    <h4 class = "card-title" id = "chembur">Ghatkopar</h4>
                                
                                
                            </div>
                            <div class="flip-card-back">
                                    <p>Count of dustbin in the locality : <div id = "2">{{$count['2'][0]->count}}</div></p>
                                    <p class="card-text">Click the Link below to view the statsistics in detail.</p>
                                    <a href="/stats/2" class="card-link">Detailed Statistics</a>
                            </div>
                        </div>
                    </div>
                    <div class="flip-card">
                            <div class="flip-card-inner">
                            <div class="flip-card-front">
                                    <h4 class = "card-title" id = "ghatkhopar">Sion</h4>                            
                            </div>
                            <div class="flip-card-back">
                                    <p>Count of dustbin in the locality : <div id = "3">{{$count['3'][0]->count}}</div></p>
                                    <p class="card-text">Click the Link below to view the statsistics in detail.</p>
                                    <a href="/stats/3" class="card-link">Detailed Statistics</a>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                {{-- <div class="flip-card">
                        <div class="flip-card-inner">
                        <div class="flip-card-front">
                                <h4 class = "card-title" id = "ghatkhopar">Kurla</h4>/                               
                        </div>
                        <div class="flip-card-back">
                                <p>Count of dustbin in the locality : <div id = "">1</p>
                                <p class="card-text">Click the Link below to view the statsistics in detail.</p>
                                <a href="/stats/4" class="card-link">Detailed Statistics</a>
                        </div>
                    </div>
                </div> --}}
            
    </div>
    <div id="cont1">
            <div class = "row">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                                <h4 class = "card-title" id = "chembur">Kurla</h4>
                            
                        </div>
                        <div class="flip-card-back">
                                <p>Count of dustbin in the locality : <div id = "4">{{$count['4'][0]->count}}</div></p>
                                <p class="card-text">Click the Link below to view the statsistics in detail.</p>
                                <a href="/stats/4" class="card-link">Detailed Statistics</a>
                        </div>
                    </div>
                </div>        
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                                <h4 class = "card-title" id = "chembur">Bandra</h4>
                            
                            
                        </div>
                        <div class="flip-card-back">
                                <p>Count of dustbin in the locality : <div id = "5">{{$count['5'][0]->count}}</div></p>
                                <p class="card-text">Click the Link below to view the statsistics in detail.</p>
                                <a href="/stats/5" class="card-link">Detailed Statistics</a>
                        </div>
                    </div>
                </div>
                <div class="flip-card">
                        <div class="flip-card-inner">
                        <div class="flip-card-front">
                                <h4 class = "card-title" id = "ghatkhopar">Dadar</h4>                            
                        </div>
                        <div class="flip-card-back">
                                <p>Count of dustbin in the locality : <div id = "6">{{$count['6'][0]->count}}</div></p>
                                <p class="card-text">Click the Link below to view the statsistics in detail.</p>
                                <a href="/stats/5" class="card-link">Detailed Statistics</a>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            {{-- <div class="flip-card">
                    <div class="flip-card-inner">
                    <div class="flip-card-front">
                            <h4 class = "card-title" id = "ghatkhopar">Kurla</h4>/                               
                    </div>
                    <div class="flip-card-back">
                            <p>Count of dustbin in the locality : 1</p>
                            <p class="card-text">Click the Link below to view the statsistics in detail.</p>
                            <a href="/stats/4" class="card-link">Detailed Statistics</a>
                    </div>
                </div>
            </div> --}}
        
    </div>

    <canvas id="canvasId"></canvas>
    <div class="row" style="width:100%;height:100%;"><div id="graphDiv1"></div></div>
</div>
    <script>
        function reload(){
            document.location.reload();
        }
    </script>
    <script>(function () {
	
            function createCanvas(divName) {
                
                var div = document.getElementById(divName);
                var canvas = document.createElement('canvas');
                div.appendChild(canvas);
                if (typeof G_vmlCanvasManager != 'undefined') {
                    canvas = G_vmlCanvasManager.initElement(canvas);
                }	
                var ctx = canvas.getContext("2d");
                return ctx;
            }
            
            var ctx = createCanvas("graphDiv1");
            var graph = new BarGraph(ctx);
            // graph.maxValue = 30;
            graph.margin = 2;
            // graph2.width = 450;
            // graph2.height = 150;
            var x1=document.getElementById("value").innerHTML;
            var x2=document.getElementById("2").innerHTML;
            var x3=document.getElementById("3").innerHTML;
            var x4=document.getElementById("4").innerHTML;
            var x5=document.getElementById("5").innerHTML;
            var x6=document.getElementById("6").innerHTML;
            // console.log(x);
            
            graph.colors = ["#49a0d8", "#d353a0", "#ffc527", "#df4c27", "#ffc527", "#49a0d8"];
            graph.xAxisLabelArr = ["Chembur", "Ghatkopar", "Kurla", "Sion", "Bandra", "Dadar"];
            graph.update([parseInt(x1),parseInt(x2),parseInt(x3),parseInt(x4),parseInt(x5),parseInt(x6)])
            // setInterval(function () {
            //     graph.update([Math.random() * 30, Math.random() * 30, Math.random() * 30, Math.random() * 30, Math.random() * 30, Math.random() * 30]);
            // }, 1500);
            
            var ctx2 = createCanvas("graphDiv2");
            
            var graph2 = new BarGraph(ctx2);
            graph2.margin = 2;
            graph2.width = 450;
            graph2.height = 150;
            graph2.xAxisLabelArr = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M"];
            // setInterval(function () {
            //     graph2.update([Math.random() * 20, Math.random() * 20, Math.random() * 20, Math.random() * 20, Math.random() * 20, Math.random() * 20, Math.random() * 20, Math.random() * 20, Math.random() * 20, Math.random() * 20, Math.random() * 20, Math.random() * 20, Math.random() * 20]);
            // }, 1500);
    
        }());</script>
    {{-- {{$statistics}} --}}
</body>
</html>

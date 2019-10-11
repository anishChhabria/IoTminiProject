@extends('layouts.app')

@section('content')
{{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> --}}
<script src = "{{asset('js/bargraph.js')}}"></script>
<div class="container" >
        {{-- @if(Session::has('message'))
            <div class="alert alert-danger">
                    <button type="button" class="close" onclick = "reload()" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
            <strong> {{ Session::get('message', '') }}</strong>
            </div>
        @endif --}}
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
                                <a href="/location/1" class="card-link">Detailed Statistics</a>
                        </div>
                    </div>
                </div>        
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                                <h4 class = "card-title" id = "ghatkopar">Ghatkopar</h4>
                            
                            
                        </div>
                        <div class="flip-card-back">
                                <p>Count of dustbin in the locality : <div id = "2">{{$count['2'][0]->count}}</div></p>
                                <p class="card-text">Click the Link below to view the statsistics in detail.</p>
                                <a href="/location/2" class="card-link">Detailed Statistics</a>
                        </div>
                    </div>
                </div>
                <div class="flip-card">
                        <div class="flip-card-inner">
                        <div class="flip-card-front">
                                <h4 class = "card-title" id = "sion">Sion</h4>                            
                        </div>
                        <div class="flip-card-back">
                                <p>Count of dustbin in the locality : <div id = "3">{{$count['3'][0]->count}}</div></p>
                                <p class="card-text">Click the Link below to view the statsistics in detail.</p>
                                <a href="/location/3" class="card-link">Detailed Statistics</a>
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
                            <h4 class = "card-title" id = "kurla">Kurla</h4>
                        
                    </div>
                    <div class="flip-card-back">
                            <p>Count of dustbin in the locality : <div id = "4">{{$count['4'][0]->count}}</div></p>
                            <p class="card-text">Click the Link below to view the statsistics in detail.</p>
                            <a href="/location/4" class="card-link">Detailed Statistics</a>
                    </div>
                </div>
            </div>        
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                            <h4 class = "card-title" id = "bandra">Bandra</h4>
                        
                        
                    </div>
                    <div class="flip-card-back">
                            <p>Count of dustbin in the locality : <div id = "5">{{$count['5'][0]->count}}</div></p>
                            <p class="card-text">Click the Link below to view the statsistics in detail.</p>
                            <a href="/location/5" class="card-link">Detailed Statistics</a>
                    </div>
                </div>
            </div>
            <div class="flip-card">
                    <div class="flip-card-inner">
                    <div class="flip-card-front">
                            <h4 class = "card-title" id = "dadar">Dadar</h4>                            
                    </div>
                    <div class="flip-card-back">
                            <p>Count of dustbin in the locality : <div id = "6">{{$count['6'][0]->count}}</div></p>
                            <p class="card-text">Click the Link below to view the statsistics in detail.</p>
                            <a href="/location/6" class="card-link">Detailed Statistics</a>
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
{{-- <canvas id="canvasId"></canvas> --}}
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

@endsection

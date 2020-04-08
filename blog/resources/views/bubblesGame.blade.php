@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Aprendamos a leer con burbujas</div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center m-3">
        <div class="col-md-10 bg-light"  style="height: 300px;">
            <div class="bubble" id="b_1"  onclick="bubblePress()"></div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <canvas id="myCanvas" width="480" height="320">

            </canvas>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10">
            <button class="btn btn-dark" onclick="animateDiv()">Press me!</button>
        </div>
    </div>
</div>
<script text="javascript">

    function makeNewPosition(id){
        // Get viewport dimensions (remove the dimension of the div)
        var h = $('div.bubble').parent().height() ;
        var w =  $('div.bubble').parent().width() ;

        var nh = Math.floor(Math.random() * h);
        var nw = Math.floor(Math.random() * w); 
       
        var actHeight = this.id.top;
        var actWidht = this.id.left;

        if( h > actHeight && w > actWidht){
            nh += 10;
            nw += 10; 
        }

        return [nh,nw]; 
    }

    function bubblePress(){
        alert(this.id );
    }

    function animateDiv(){
        var newq = makeNewPosition();
        
        var oldq = $('.bubble').offset();
        var speed = calcSpeed([oldq.top, oldq.left], newq);
        
        $('.bubble').animate({ top: newq[0], left: newq[1] }, speed, function(){
            animateDiv();        
        });
    };

    function calcSpeed(prev, next) {
        var x = Math.abs(prev[1] - next[1]);
        var y = Math.abs(prev[0] - next[0]);
        
        var greatest = x > y ? x : y;
        var speedModifier = 0.1;
        var speed = Math.ceil(greatest/speedModifier);
        return speed;
    }

</script>
@endsection

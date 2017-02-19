@extends('layouts.app')

@section('content')
        <!-- Jumbotron -->


<?php if (Auth::check())
{ echo "<h1>EEEE</h1>";}
        ?>


<div class="jumbotron">
    <h1>Marketing stuff!</h1>
    <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet.</p>
    <p><a class="btn btn-lg btn-success" href="#" role="button">Get started today</a></p>
</div>

<!-- Example row of columns -->
<div class="row">
    <div class="col-lg-4">
        <h2>{{$content[1]->name}}</h2>
        {{$content[1]->body}}
        <p><a class="btn btn-primary" href="/{{$content[1]->id}}" role="button">View details &raquo;</a></p>
    </div>
    <div class="col-lg-4">
        <h2>{{$content[2]->name}}</h2>
        {{$content[2]->body}}
        <p><a class="btn btn-primary" href="/{{$content[2]->id}}" role="button">View details &raquo;</a></p>
    </div>
    <div class="col-lg-4">
        <h2>{{$content[3]->name}}</h2>
        {{$content[3]->body}}
        <p><a class="btn btn-primary" href="/{{$content[3]->id}}" role="button">View details &raquo;</a></p>
    </div>
</div>
@endsection

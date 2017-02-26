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

    @foreach($content as $post)
        <div class="col-lg-4 post-info" >
            <h2>{{$post->name}}</h2>
          <div>  <?php
              $text=$post->body;
              echo htmlspecialchars($text,ENT_HTML5);
              ?></div>
            @if (Auth::check())
            <p><a class="btn btn-primary edit-con"  href="/{{$post->id}}/edit" id="{{$post->id}}" role="button">Edit</a></p>
            @else
            @endif
        </div>
    @endforeach

</div>
@endsection

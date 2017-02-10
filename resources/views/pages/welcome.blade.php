@extends('main')
@section('title', 'Home')
@section('content')
<!-- First Container -->
<div class="container-fluid home-pages bg-1 text-center">
  <h3 class="margin">Who Am I?</h3>
  <img src="https://s-media-cache-ak0.pinimg.com/736x/f5/af/54/f5af549a8dfbe400cd2fd45704918fc8.jpg" class="img-responsive img-circle margin" style="display:inline" alt="Bird" width="350" height="350">
  <h3>I'm an adventurer</h3>
</div>

<!-- Second Container -->
<div class="awesome-feeling">
    <div class="container home-pages bg-2 text-center">
      <h3 class="margin">What Am I?</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
    </div>
</div>

<!-- Third Container (Grid) -->
<div class="container home-pages bg-3 text-center">    
  <h3 class="margin">Why am I?</h3><br>
  <div class="row">
    @foreach($posts as $post)
      <div class="post col-sm-4">
        <img src="{{ $post->image }}" class="img-responsive margin" style="width:100%" alt="Image">
        <h3><a href="{{url('blog/'.$post->slug)}}" class="">{{$post->title}}</a></h3>
        <p>{{substr($post->body, 0, 250)}}{{strlen($post->body)>250?"....":""}}</p>
        <a href="{{url('blog/'.$post->slug)}}" class="btn btn-info">Read More</a>
      </div>
    @endforeach
  </div>
  <div class="home-pages text-center">
    <a href="/blog" type="button" class="btn btn-primary">Read Entire Blog</a>
</div>
</div>     
@endsection
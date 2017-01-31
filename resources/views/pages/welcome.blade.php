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
    <div class="col-sm-4">
        <img src="http://www.w3schools.com/bootstrap/birds1.jpg" class="img-responsive margin" style="width:100%" alt="Image">
        <h4>Hello blog</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <button type="button" class="btn btn-info">Read More</button>
    </div>
    <div class="col-sm-4">
        <img src="http://www.w3schools.com/bootstrap/birds2.jpg" class="img-responsive margin" style="width:100%" alt="Image">
        <a href="#"><h4>Hello blog</h4></a>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <button type="button" class="btn btn-info">Read More</button>
    </div>
    <div class="col-sm-4"> 
        <img src="http://www.w3schools.com/bootstrap/birds3.jpg" class="img-responsive margin" style="width:100%" alt="Image">
        <h4>Hello blog</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <button type="button" class="btn btn-info">Read More</button>
    </div>
  </div>
  <div class="home-pages text-center">
    <button type="button" class="btn btn-primary">Read Entire Blog</button>
</div>
</div>     
@endsection
@extends('masterlayout')

@section('section')
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-white mb-0">
      <li class="breadcrumb-item"><a href="userindex">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Bench</li>
    </ol>
  </nav>

  <div class="container">
    <div class="row">
      <div class="col-12 pt-3 pb-3 ">
        <a href="/bench/freesubmit" class="btn btn-dark btn-lg btn-block shadow">Free Submit</a>
      </div>
      <div class="col-12 pt-3 pb-3 ">
        <a href="/bench/paidsubmit" class="btn btn-dark btn-lg btn-block shadow">Paid Submit</a>
      </div>
      <div class="col-12 pt-3 pb-3 ">
        <a href="/bench/prosubmit" class="btn btn-dark btn-lg btn-block shadow">Pro Submit</a>
      </div>
    </div>
  </div>
  <hr>
  <div class="container">
    <div>
      <h5 class="text-center">Submit Types</h5>
      <h5>Free Submit</h5>
      <p>This may take up to 24 hours.</p>
      <br>
      <h5>Paid Submit</h5>
      <p>Response time varied on price.</p>
      <br>
      <h5>Pro Submit</h5>
      <p>Video Calling.</p>
    </div>
  </div>

@endsection

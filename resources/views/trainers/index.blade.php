@extends('masterlayout')

@section('section')
  <div class="container">
      <div class="row mt-3">
        <div class="col-5 d-flex align-items-center">
          <div class="row text-center w-100">
            <div class="col-12 mb-0 pb-0">
              <img src="https://thumbs.dreamstime.com/z/default-avatar-profile-icon-grey-photo-placeholder-illustrations-vectors-default-avatar-profile-icon-grey-photo-placeholder-99724602.jpg" style="width:80%; height:100%" alt="Avatar">
            </div>
            <div class="col-12">
              <h5 class="text-center text-danger">589</h5>
            </div>
            <div class="d-flex justify-content-center w-100">
              <div class="p-1">
                <a href="#" class="fa fa-facebook"></a>
              </div>
              <div class="p-1">
                <a href="#" class="fa fa-twitter"></a>
              </div>
              <div class="p-1">
                <a href="#" class="fa fa-instagram"></a>
              </div>
              <div class="p-1">
                <a href="#" class="fa fa-youtube"></a>
              </div>
            </div>

          </div>
        </div>

        <div class="col shadow-sm pl-0 pr-0">
          <div class="col-12 bg-light clearfix">
            <p class="float-left pl-3 pt-2">Username: </p>
            <p class="text-primary float-right pr-3 pt-2">DanRigg11</p>
          </div>

          <div class="col-12 bg-light clearfix">
            <p class="float-left pl-3">Name: </p>
            <p class="float-right pr-3">Daniel Rigg</p>
          </div>

          <div class="col-12 bg-light clearfix">
            <p class="float-left pl-3">Age: </p>
            <p class="float-right pr-3">26</p>
          </div>

          <div class="col-12 bg-light clearfix">
            <p class="float-left pl-3">Weight: </p>
            <p class="float-right pr-3">64kg</p>
          </div>

          <div class="col-12 bg-light clearfix">
            <p class="float-left pl-3">Squat PB: </p>
            <p class="float-right pr-3">135kg</p>
          </div>

          <div class="col-12 bg-light clearfix">
            <p class="float-left pl-3">Bench PB: </p>
            <p class="float-right pr-3">87.5kg</p>
          </div>

          <div class="col-12 bg-light clearfix">
            <p class="float-left pl-3">Deadlift PB: </p>
            <p class="float-right pr-3">160kg</p>
          </div>

          <div class="col-12 bg-light clearfix">
            <p class="float-left pl-3">Total: </p>
            <p class="float-right pr-3 text-danger">382.5kg</p>
          </div>

          <div class="col-12 bg-light clearfix">
            <p class="float-left pl-3">IPF Qualifying Total: </p>
            <p class="float-right pr-3 text-danger">450kg</p>
          </div>

          <nav class="navbar navbar-expand-lg navbar-light bg-light">

  <button class="navbar-toggler btn-warning" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">Uncomplete Jobs</button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
  </div>
</nav>
          <div class="col-12 pt-3 pb-3 bg-light">
            <a href="/trainerjobs" class="btn btn-dark btn-lg btn-block active shadow-lg" role="button" aria-pressed="true">Jobs</a>
          </div>

        </div>
      </div>
    </div>


    <div class="container mb-5 pb-5">




    </div>

@endsection

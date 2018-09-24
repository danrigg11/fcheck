@extends('masterlayout')

@section('section')
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-white mb-0">
      <li class="breadcrumb-item"><a href="/userindex">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Trainer</li>
    </ol>
  </nav>

  <div class="container">
      <div class="row mt-3">
        <div class="col-xs-12 col-sm-5 d-flex align-items-center">
          <div class="row text-center w-100">
            <div class="col-12 mb-0 pb-0">
              <img src="https://thumbs.dreamstime.com/z/default-avatar-profile-icon-grey-photo-placeholder-illustrations-vectors-default-avatar-profile-icon-grey-photo-placeholder-99724602.jpg" style="width:80%; height:100%" alt="Avatar">
            </div>
            <div class="col-12">
              <h5 class="text-center text-danger">589<img style="height:40px; width:40px" src="{{ asset('images/Icons/icons8-gold-medal-50.png') }}" alt=""></h5>
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

        <div class="col pl-0 pr-0">
          <div class="bg-light clearfix">
            <p class="float-left pl-3 pt-2">Username: </p>
            <p class="text-primary float-right pr-3 pt-2">DanRigg11</p>
          </div>

          <div class="bg-light clearfix">
            <p class="float-left pl-3">Name: </p>
            <p class="float-right pr-3">Daniel Rigg</p>
          </div>

          <div class="bg-light clearfix">
            <p class="float-left pl-3">Age: </p>
            <p class="float-right pr-3">26</p>
          </div>

          <div class="bg-light clearfix">
            <p class="float-left pl-3">Weight: </p>
            <p class="float-right pr-3">64kg</p>
          </div>

          <div class="bg-light clearfix">
            <p class="float-left pl-3">Squat PB: </p>
            <p class="float-right pr-3">135kg</p>
          </div>

          <div class="bg-light clearfix">
            <p class="float-left pl-3">Bench PB: </p>
            <p class="float-right pr-3">87.5kg</p>
          </div>

          <div class="bg-light clearfix">
            <p class="float-left pl-3">Deadlift PB: </p>
            <p class="float-right pr-3">160kg</p>
          </div>

          <div class="bg-light clearfix">
            <p class="float-left pl-3">Total: </p>
            <p class="float-right pr-3 text-danger">382.5kg</p>
          </div>

          <div class="bg-light clearfix">
            <p class="float-left pl-3">IPF Qualifying Total: </p>
            <p class="float-right pr-3 text-danger">450kg</p>
          </div>

        <div class="clearfix mt-1">
          <button class="btn btn-dark float-right mr-1">Add trainer to submit list</button>
        </div>
        <div class="clearfix mt-1">
          <button class="btn btn-success float-right mr-1">Send message</button>
        </div>

        </div>

      </div>


      <div class="row bg-light mt-4">
        <div class="col-12">
          <p class="pt-2">hello world</p>
        </div>
      </div>
    </div>


    <div class="container mb-5 pb-5">




    </div>

@endsection

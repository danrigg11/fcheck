@extends('masterlayout')

@section('section')
  <div class="container">
      <div class="row mt-3">
        <div class="col-xs-12 col-sm-5 d-flex align-items-center">
          <div class="row text-center w-100">
            <div class="col-12">
              <img src="https://thumbs.dreamstime.com/z/default-avatar-profile-icon-grey-photo-placeholder-illustrations-vectors-default-avatar-profile-icon-grey-photo-placeholder-99724602.jpg" style="width:80%; height:100%" alt="Avatar">
            </div>
            <div class="col-12">
              <h5 class="text-center">£110.00</h5>
            </div>
          </div>

        </div>
        <div class="col shadow-sm pl-0 pr-0">
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

        </div>
      </div>
    </div>
    <div class="text-center mt-2 mb-2 pt-2">
      <h1>Submit</h1>
      <hr>
    </div>

    <div class="container mb-5 pb-5">
      <div class="row">
        <div class="col-12 pt-3 pb-3 ">
          <a href="squat" class="btn btn-dark btn-lg btn-block active shadow-lg" role="button" aria-pressed="true">Squat</a>
        </div>
        <div class="col-12 pt-3 pb-3 ">
          <a href="bench" class="btn btn-dark btn-lg btn-block active shadow-lg" role="button" aria-pressed="true">Bench</a>
        </div>
        <div class="col-12 pt-3 pb-3 ">
          <a href="deadlift" class="btn btn-dark btn-lg btn-block active shadow-lg" role="button" aria-pressed="true">Deadlift</a>
        </div>
        <br>
        <br>
      </div>

      <div class="text-center mt-2 mb-2 pt-2">
        <h1>Pervious Submits</h1>
        <hr>
      </div>

      <div class="row shadow-sm pl-0 pr-0 mt-3">
        <div class="col-3 bg-light">
          <p class="pt-2">Date</p>
        </div>
        <div class="col-3 bg-light">
          <p class="pt-2">Type</p>
        </div>
        <div class="col-3 bg-light">
          <p class="pt-2">Status</p>
        </div>
        <div class="col-3 bg-light">
          <p class="float-right pt-2">Trainer</p>
        </div>
        <div class="col-12 bg-light m-0">
          <hr class="mt-0 mb-0">
        </div>
        </div>

        <div class="row shadow-sm pl-0 pr-0 mt-0">
        <div class="col-3 bg-light">
          <p class="pt-2">13/09/2018</p>
        </div>
        <div class="col-3 bg-light">
          <p class="pt-2">Bench</p>
        </div>
        <div class="col-3 bg-light">
          <p class="pt-2 text-success">Pending...</p>
        </div>
        <div class="col-3 bg-light">
          <a href="/trainer" class="float-right pt-2">Erik1995</a>
        </div>
        </div>
        <div class="row shadow-sm pl-0 pr-0 mt-0">
        <div class="col-3 bg-light">
          <p class="pt-2">11/09/2018</p>
        </div>
        <div class="col-3 bg-light">
          <p class="pt-2">Squat</p>
        </div>
        <div class="col-3 bg-light">
          <p class="pt-2 text-primary">Complete</p>
        </div>
        <div class="col-3 bg-light">
          <a href="/trainer" class="float-right pt-2">Erik1995</a>
        </div>
        </div>
        <div class="row shadow-sm pl-0 pr-0 mt-0">
        <div class="col-3 bg-light">
          <p class="pt-2">09/09/2018</p>
        </div>
        <div class="col-3 bg-light">
          <p class="pt-2">Bench</p>
        </div>
        <div class="col-3 bg-light">
          <p class="pt-2 text-primary">Complete</p>
        </div>
        <div class="col-3 bg-light">
          <a href="/trainer" class="float-right pt-2">JamesBench</a>
        </div>
        </div>
        <div class="row shadow-sm pl-0 pr-0 mt-0">
        <div class="col-3 bg-light">
          <p class="pt-2">31/08/2018</p>
        </div>
        <div class="col-3 bg-light">
          <p class="pt-2">Deadlift</p>
        </div>
        <div class="col-3 bg-light">
          <p class="pt-2 text-danger"><s>Expired</s></p>
        </div>
        <div class="col-3 bg-light">
          <a href="/trainer" class="float-right pt-2">Erik1995</a>
        </div>
        </div>




    </div>

@endsection

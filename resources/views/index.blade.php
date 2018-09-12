@extends('masterlayout')

@section('section')
  <div class="container">
      <div class="row mt-3">
        <div class="col-5 d-flex align-items-center">
          <div class="row text-center w-100">
            <div class="col-12">
              <img style="width:50%; height:50%" src="s" alt="Avatar">
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
          <button type="button" class="btn btn-dark btn-lg btn-block shadow" name="button"><a class="text-white" href="squat.html">Squat</a></button>
        </div>
        <div class="col-12 pt-3 pb-3 ">
          <button class="btn btn-dark btn-lg btn-block shadow" type="button" class="btn btn-dark btn-lg btn-block shadow-lg" name="button">Bench</button>
        </div>
        <div class="col-12 pt-3 pb-3 ">
          <button class="btn btn-dark btn-lg btn-block shadow" type="button" class="btn btn-dark btn-lg btn-block shadow-lg" name="button">Deadlift</button>
        </div>
        <br>
        <br>
      </div>
    </div>

@endsection

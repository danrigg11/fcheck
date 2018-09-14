@extends('masterlayout')

@section('section')
  <div class="container">
    <div class="row mt-3">


      <div class="col-12 shadow-sm pl-0 pr-0 bg-light">
        <h4 class="pl-3 pt-2">Jobs</h4>
      </div>
      <div class="col-12 bg-light">
        <hr class="bg-light mt-0 mb-0">
        <h2 class="bg-light pt-1">Filter</h2>
      </div>


      <div id="myBtnContainer" class="bg-light w-100">
        <button class="btn active bg-light" onclick="filterSelection('all')"> Show all</button>
        <button class="btn bg-light" onclick="filterSelection('squat')">Squat</button>
        <button class="btn bg-light" onclick="filterSelection('bench')">Bench</button>
        <button class="btn bg-light" onclick="filterSelection('deadlift')">Dealift</button>
        <button class="btn bg-light" onclick="filterSelection('other')">Other</button>
      </div>

    </div>
  </div>
</div>


<div class="container mb-5 pb-5">
  <div class="row">

    <div class="col-4 mt-2 filterDiv squat">
      <div class="card">
        <div class="card-header">
          <h4 href="#" class="">Squat</h4>
        </div>
        <div class="card-body">
          <p class="">14/09/2018<span class="pl-4">14:25</span></p>
          <a href="#" class="">Daniel R</a>
          <hr>
          <a href="#" class="btn btn-dark" role="button" aria-pressed="true">Take job</a>
        </div>
      </div>
    </div>

    <div class="col-4 mt-2 filterDiv bench">
      <div class="card">
        <div class="card-header">
          <h4 href="#" class="">Bench</h4>
        </div>
        <div class="card-body">
          <p class="">11/09/2018<span class="pl-4">11:05</span></p>
          <a href="#" class="">Daniel R</a>
          <hr>
          <a href="#" class="btn btn-dark" role="button" aria-pressed="true">Take job</a>
        </div>
      </div>
    </div>

    <div class="col-4 mt-2 filterDiv deadlift">
      <div class="card">
        <div class="card-header">
          <h4 href="#" class="">Deadlift</h4>
        </div>
        <div class="card-body">
          <p class="">14/09/2018<span class="pl-4">14:25</span></p>
          <a href="#" class="">Daniel R</a>
          <hr>
          <a href="#" class="btn btn-dark" role="button" aria-pressed="true">Take job</a>
        </div>
      </div>
    </div>

    <div class="col-4 mt-2 filterDiv other">
      <div class="card">
        <div class="card-header">
          <h4 href="#" class="">Other</h4>
        </div>
        <div class="card-body">
          <p class="">14/09/2018<span class="pl-4">14:25</span></p>
          <a href="#" class="">Daniel R</a>
          <hr>
          <a href="#" class="btn btn-dark" role="button" aria-pressed="true">Take job</a>
        </div>
      </div>
    </div>


        <div class="col-4 mt-2 filterDiv bench">
          <div class="card">
            <div class="card-header">
              <h4 href="#" class="">Bench</h4>
            </div>
            <div class="card-body">
              <p class="">11/09/2018<span class="pl-4">11:05</span></p>
              <a href="#" class="">Daniel R</a>
              <hr>
              <a href="#" class="btn btn-dark" role="button" aria-pressed="true">Take job</a>
            </div>
          </div>
        </div>

        <div class="col-4 mt-2 filterDiv squat">
          <div class="card">
            <div class="card-header">
              <h4 href="#" class="">Squat</h4>
            </div>
            <div class="card-body">
              <p class="">14/09/2018<span class="pl-4">14:25</span></p>
              <a href="#" class="">Daniel R</a>
              <hr>
              <a href="#" class="btn btn-dark" role="button" aria-pressed="true">Take job</a>
            </div>
          </div>
        </div>

        <div class="col-4 mt-2 filterDiv other">
          <div class="card">
            <div class="card-header">
              <h4 href="#" class="">Other</h4>
            </div>
            <div class="card-body">
              <p class="">14/09/2018<span class="pl-4">14:25</span></p>
              <a href="#" class="">Daniel R</a>
              <hr>
              <a href="#" class="btn btn-dark" role="button" aria-pressed="true">Take job</a>
            </div>
          </div>
        </div>



  </div>
</div>

@endsection

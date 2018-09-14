@extends('masterlayout')

@section('section')
  <div class="container">
    <div class="row">
      <div class="col-12 pt-3 pb-3 ">
        <button type="button" class="btn btn-dark btn-lg btn-block shadow" name="button">Free Submit</button>
      </div>
      <div class="col-12 pt-3 pb-3 ">
        <button class="btn btn-dark btn-lg btn-block shadow" type="button" class="btn btn-dark btn-lg btn-block shadow-lg" name="button">Paid Submit</button>
      </div>
      <div class="col-12 pt-3 pb-3 ">
        <button class="btn btn-dark btn-lg btn-block shadow" type="button" class="btn btn-dark btn-lg btn-block shadow-lg" name="button">Pro Submit</button>
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

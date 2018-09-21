@extends('masterlayout')

@section('section')
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-white mb-0">
      <li class="breadcrumb-item"><a href="/userindex">Home</a></li>
      <li class="breadcrumb-item"><a href="/other">Other</a></li>
      <li class="breadcrumb-item active" aria-current="page">Free Submit</li>
    </ol>
  </nav>

  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-md-10 order-md-1">

        <h4 class="mb-3">Free Submit</h4>
        <hr>

        <form class="was-validated">
          <div class="form-group">
            <label for="formGroupExampleInput">Exercise name</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Name" required>
            <div class="invalid-feedback">Must have exercise name.</div>
          </div>

          <div class="form-group">
            <label for="validationTooltip01">Weight ammount</label>
            <input type="text" class="form-control" id="validationWeight" placeholder="kg" value="" required>
            <div class="invalid-feedback">Must have weight ammount.</div>
          </div>

          <hr>

          <div class="form-group">
            <label for="exampleFormControlFile1">Example file input</label>
            <input type="file" class="form-control pb-1 pt-1" id="exampleFormControlFile1" required>
            <div class="invalid-feedback">Must have file attached.</div>
          </div>

          <hr>

          <div class="form-group">
            <label for="exampleFormControlTextarea1">Textarea. For details or questions</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
            <div class="invalid-feedback">Must have more information.</div>
          </div>


          <div class="custom-control custom-checkbox mb-3">
            <input type="checkbox" class="custom-control-input" id="customControlValidation1" required>
            <label class="custom-control-label" for="customControlValidation1">I give permisson to upload this video to trainers.</label>
            <div class="invalid-feedback">You must agree to these terms to submit.</div>
          </div>
          <div class="custom-control custom-checkbox mb-3">
            <input type="checkbox" class="custom-control-input" id="customControlValidation2" required>
            <label class="custom-control-label" for="customControlValidation2">I accept <span><a href="#">T&C</a></span>.</label>
            <div class="invalid-feedback">You must agree to these terms to submit.</div>
          </div>

          <hr>

          <button class="btn btn-primary mb-4" type="submit">Submit form</button>
        </form>

      </div>
    </div>
  </div>


@endsection

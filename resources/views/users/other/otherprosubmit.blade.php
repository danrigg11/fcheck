@extends('masterlayout')

@section('section')
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-white mb-0">
      <li class="breadcrumb-item"><a href="/userindex">Home</a></li>
      <li class="breadcrumb-item"><a href="/other">Other</a></li>
      <li class="breadcrumb-item active" aria-current="page">Pro Submit</li>
    </ol>
  </nav>

  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-md-10 order-md-1">

        <h4 class="mb-3">Pro Submit</h4>
        <hr>

        <form class="was-validated">
          <div class="card mb-0 w-100" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Recently used</h5>
              <div class="form-group mb-1">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <input type="checkbox" aria-label="Checkbox for following text input" id="Erik">
                    </div>
                  </div>
                  <label class="form-control" aria-label="Text input with checkbox" for="Erik">Erik<a class="float-right pr-2" href="/trainer">See Trainer</a></label>
                </div>
              </div>

              <div class="form-group mb-1">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <input type="checkbox" aria-label="Checkbox for following text input" id="Stan">
                    </div>
                  </div>
                  <label class="form-control" aria-label="Text input with checkbox" for="Stan">Stan<a class="float-right pr-2" href="/trainer">See Trainer</a></label>
                </div>
              </div>
            </div>
          </div>


          <nav class="navbar navbar-expand-lg navbar-light bg-white" style="border-radius: 05px;border: 1px solid #D2CFCF">
            <a class="navbar-brand">Other</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Top Ranked</a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <ul style="height: auto; max-height: 100px; overflow-x: hidden;" role="menu">
                      <li>Tim doe <span class="text-danger">500 Points</span><a class="float-right pr-2" href="/trainer">See Trainer</a></li>
                      <li>mike chang <span class="text-danger">497 Points</span><a class="float-right pr-2" href="/trainer">See Trainer</a></li>
                      <li>stan twist <span class="text-danger">490 Points</span><a class="float-right pr-2" href="/trainer">See Trainer</a></li>
                      <li>alex nah <span class="text-danger">488 Points</span><a class="float-right pr-2" href="/trainer">See Trainer</a></li>
                      <li>dan Rigg <span class="text-danger">478 Points</span><a class="float-right pr-2" href="/trainer">See Trainer</a></li>
                      <li>Ebony Nash <span class="text-danger">450 Points</span><a class="float-right pr-2" href="/trainer">See Trainer</a></li>
                    </ul>
                  </div>
                </li>

                <li class="nav-item dropdown mb-4">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Approved Trainers</a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <ul style="height: auto; max-height: 100px; overflow-x: hidden;" role="menu">
                      <li>Tim doe <span class="text-danger">500 Points</span><a class="float-right pr-2" href="/trainer">See Trainer</a></li>
                      <li>mike chang <span class="text-danger">497 Points</span><a class="float-right pr-2" href="/trainer">See Trainer</a></li>
                      <li>stan twist <span class="text-danger">490 Points</span><a class="float-right pr-2" href="/trainer">See Trainer</a></li>
                      <li>alex nah <span class="text-danger">488 Points</span><a class="float-right pr-2" href="/trainer">See Trainer</a></li>
                      <li>dan Rigg <span class="text-danger">478 Points</span><a class="float-right pr-2" href="/trainer">See Trainer</a></li>
                      <li>Ebony Nash <span class="text-danger">450 Points</span><a class="float-right pr-2" href="/trainer">See Trainer</a></li>
                    </ul>
                  </div>
                </li>
              </ul>

              <form class="was-validated my-2 my-lg-0">
                <label>Search for a trainer</label>
                <div class="input-group">
                  <input class="form-control mr-sm-2" type="search" placeholder="Search">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                
              </div>
            </div>
          </nav>

          <hr>
          <div class="form-group">
            <label for="formGroupExampleInput">Exercise name</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Name" required>
            <div class="invalid-feedback">Must have exercise name.</div>
          </div>

          <div class="form-group">
            <label class="" for="exampleInputAmount">Amount (in British Pounds)</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupPrepend">GBP</span>
              </div>
              <input type="number" min="0.00" step="0.50" value="1.00" id="exampleInputAmount" class="form-control" placeholder="Price" required>
            </div>
            <small class="text-muted">This amount is per video minute.</small>
          </div>

          <hr>

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
          <button class="btn btn-primary mb-4" type="submit">Submit form</button>
        </form>

      </div>
    </div>
  </div>


@endsection

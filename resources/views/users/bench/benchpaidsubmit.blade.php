@extends('masterlayout')

@section('section')
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-white mb-0">
      <li class="breadcrumb-item"><a href="/userindex">Home</a></li>
      <li class="breadcrumb-item"><a href="/bench">Bench</a></li>
      <li class="breadcrumb-item active" aria-current="page">Paid Submit</li>
    </ol>
  </nav>

  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-md-10 order-md-1">

        <h4 class="mb-3">Paid Submit</h4>
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


          <nav class="navbar navbar-expand-xs navbar-light bg-white" style="border-radius: 05px;border: 1px solid #D2CFCF">
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

                <label>Search for a trainer</label>
                <div class="input-group">
                  <input class="form-control mr-sm-2" type="search" placeholder="Search">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>

              </div>
            </div>
          </nav>

          <hr>

          <div class="form-group">
            <label class="" for="exampleInputAmount">Amount (in British Pounds)</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupPrepend">GBP</span>
              </div>
              <input type="number" min="0.00" step="0.50" value="1.00" id="exampleInputAmount" class="form-control" placeholder="Price" required>
            </div>
            <label class="mb-0 pb-1 mt-2" for="exampleFormControlSelect1">Within time</label>
            <select class="form-control" id="exampleFormControlSelect1">
              <option>10 minutes</option>
              <option>15 minutes</option>
              <option>20 minutes</option>
              <option>1 hour</option>
              <option>today</option>
            </select>
            <small id="passwordHelpInline" class="text-muted">The trainer will get a thurther 5-10 minutes once accepted case depending on viedo length.</small>
          </div>

          <hr>
          <div class="form-group">
            <label for="formGroupExampleInput">Type of bench</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Name" required>
            <div class="invalid-feedback">Must have exercise name.</div>
          </div>

          <div class="form-group">
            <label for="validationTooltip01">Weight ammount</label>
            <input type="text" class="form-control" id="validationWeight" placeholder="kg" value="" required>
            <div class="invalid-feedback">Must have weight ammount.</div>
          </div>

          <div class="form-group">
            <label for="exampleFormControlFile1">Example file input (optional but prefered)</label>
            <input type="file" class="form-control pb-1 pt-1" id="exampleFormControlFile1">
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
            <label class="custom-control-label" for="customControlValidation2">I accept</label>
            <div class="invalid-feedback">You must agree to these terms to submit.</div>
            <a class="tclink" href="#" data-toggle="modal" data-target="#exampleModalLong">T&C.</a>
          </div>
          <button class="btn btn-primary mb-4" type="submit">Submit form</button>
        </form>
        <!-- Modal -->
        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <h3>1. Your relationship with FormCheck</h3>
                <p>1.1 The Terms form a legally binding agreement between you and YouTube in relation to your use of the Service. It is important that you take the time to read them carefully.</p>
                <p>1.2 The Terms apply to all users of the Service, including users who are also contributors of Content, on the Service. "Content" includes the text, graphics, photos, videos, interactive features and other materials you may view on, access through or contribute to the Service.</p>
                <hr>
                <h3>2. Accepting the Terms</h3>
                <p>2.1 In order to use the Service, you must firstly agree to the Terms. You may not use the Service if you do not accept the Terms.</p>
                <p>2.2 You can accept the Terms by simply using the Service. You understand and agree that FormCheck will treat your use of the Service as acceptance of the Terms from that point onwards.</p>
                <p>2.3 You may not use the Service and may not accept the Terms if (a) you are not of legal age to form a binding contract with FormCheck, or (b) you are a person who is either barred or otherwise legally prohibited from receiving or using the Service under the laws of the country in which you are resident or from which you access or use the Service.</p>
                <p>2.4 You should print off or save a local copy of the Terms for your records.</p>
                <h3>3. Changes to the Terms</h3>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@extends('masterlayout')

@section('section')
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-white mb-0">
      <li class="breadcrumb-item"><a href="/userindex">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Account settings</li>
    </ol>
  </nav>
  <div class="container mb-4">
    <div class="row mt-3">
      <div class="col-xs-12 col-sm-12 d-flex align-items-center">
        <div class="row text-center w-100">
          <div class="col-12">
            <img src="https://thumbs.dreamstime.com/z/default-avatar-profile-icon-grey-photo-placeholder-illustrations-vectors-default-avatar-profile-icon-grey-photo-placeholder-99724602.jpg" style="width:80%; height:100%; max-height:400px; max-width:400px" alt="Avatar">
          </div>
        </div>

      </div>
      <div class="col-12 shadow-sm pl-0 pr-0 bg-light mt-3">
        <p class="float-left pl-3 mt-2">Account: </p>


        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text pr-1" id="inputGroupFileAddon01">Card Details: </span>
          </div>
          <div class="input-group-append">
            <!-- Button trigger modal -->
            <button class="btn btn-outline-secondary" type="button" data-toggle="modal" data-target="#Modal2">Change</button>
            <!-- Modal -->
            <div class="modal fade bd-example-modla-lg" id="Modal2" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabel">Card Details: </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="col-md-12 order-md-1">
                      <h4 class="mb-3">Billing address</h4>
                      <form class="needs-validation" novalidate="">
                        <div class="row">
                          <div class="col-md-6 mb-3">
                            <label for="firstName">First name</label>
                            <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                            <div class="invalid-feedback">
                              Valid first name is required.
                            </div>
                          </div>
                          <div class="col-md-6 mb-3">
                            <label for="lastName">Last name</label>
                            <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
                            <div class="invalid-feedback">
                              Valid last name is required.
                            </div>
                          </div>
                        </div>

                        <div class="mb-3">
                          <label for="email">Email </label>
                          <input type="email" class="form-control" id="email" placeholder="you@example.com">
                          <div class="invalid-feedback">
                            Please enter a valid email address for shipping updates.
                          </div>
                        </div>

                        <div class="mb-3">
                          <label for="address">Address</label>
                          <input type="text" class="form-control" id="address" placeholder="1234 Main St" required="">
                          <div class="invalid-feedback">
                            Please enter your shipping address.
                          </div>
                        </div>

                        <div class="mb-3">
                          <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
                          <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
                        </div>

                        <div class="row">
                          <div class="col-md-5 mb-3">
                            <label for="country">Country</label>
                            <select class="custom-select d-block w-100" id="country" required="">
                              <option value="">Choose...</option>
                              <option>United States</option>
                            </select>
                            <div class="invalid-feedback">
                              Please select a valid country.
                            </div>
                          </div>
                          <div class="col-md-4 mb-3">
                            <label for="state">State</label>
                            <select class="custom-select d-block w-100" id="state" required="">
                              <option value="">Choose...</option>
                              <option>California</option>
                            </select>
                            <div class="invalid-feedback">
                              Please provide a valid state.
                            </div>
                          </div>
                          <div class="col-md-3 mb-3">
                            <label for="zip">Zip</label>
                            <input type="text" class="form-control" id="zip" placeholder="" required="">
                            <div class="invalid-feedback">
                              Zip code required.
                            </div>
                          </div>
                        </div>

                        <hr class="mb-4">

                        <h4 class="mb-3">Payment Details</h4>

                        <div class="d-block my-3">
                          <div class="custom-control custom-radio">
                            <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked="" required="">
                            <label class="custom-control-label" for="credit">Credit card</label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required="">
                            <label class="custom-control-label" for="debit">Debit card</label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required="">
                            <label class="custom-control-label" for="paypal">PayPal</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6 mb-3">
                            <label for="cc-name">Name on card</label>
                            <input type="text" class="form-control" id="cc-name" placeholder="" required="">
                            <small class="text-muted">Full name as displayed on card</small>
                            <div class="invalid-feedback">
                              Name on card is required
                            </div>
                          </div>
                          <div class="col-md-6 mb-3">
                            <label for="cc-number">Credit card number</label>
                            <input type="text" class="form-control" id="cc-number" placeholder="" required="">
                            <div class="invalid-feedback">
                              Credit card number is required
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-3 mb-3">
                            <label for="cc-expiration">Expiration</label>
                            <input type="text" class="form-control" id="cc-expiration" placeholder="" required="">
                            <div class="invalid-feedback">
                              Expiration date required
                            </div>
                          </div>
                          <div class="col-md-3 mb-3">
                            <label for="cc-cvv">CVV</label>
                            <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
                            <div class="invalid-feedback">
                              Security code required
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text">Username:</span>
          </div>
          <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
          <div class="input-group-append">
            <span class="input-group-text">DanRigg11</span>
          </div>
        </div>

        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text">Weight kg:</span>
          </div>
          <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
          <div class="input-group-append">
            <span class="input-group-text">64kg</span>
          </div>
        </div>

        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text">Squat PB:</span>
          </div>
          <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
          <div class="input-group-append">
            <span class="input-group-text">135kg</span>
          </div>
        </div>

        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text">Bench PB:</span>
          </div>
          <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
          <div class="input-group-append">
            <span class="input-group-text">87.5kg</span>
          </div>
        </div>

        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text">Deadlift PB:</span>
          </div>
          <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
          <div class="input-group-append">
            <span class="input-group-text">160kg</span>
          </div>
        </div>

        <div class="clearfix">
          <p class="float-left pl-3">Total: </p>
          <p class="float-right pr-3 text-danger">382.5kg</p>
        </div>

      </div>

      <div class="shadow-sm col-12 pl-0 pr-0 bg-light mt-3 pb-3 mb-2">
        <p class="float-left pl-3 pt-2">Change password:</p>
        <div class="input-group mb-3 mt-3">
          <div class="input-group-prepend">
            <span class="input-group-text">Password</span>
          </div>
          <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
        </div>
        <a href="/userindex" class="btn bg-secondary ml-2 text-white">Close</a>
        <button type="button" class="btn btn-primary float-right mr-2">Save changes</button>
      </div>

    </div>
  </div>

@endsection

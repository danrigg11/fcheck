<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Form Check</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="css/master.css">

  <!-- Add icon library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
  <div class="text-center mt-0 mb-0  bg-success">
    <h1 class="mb-0 mt-0">Form Check</h1>
  </div>
  <div class="container">

    <div class="row">
      <div class="col-xs-12 col-sm-6 mt-3">
        <div class="card">
          <div class="card-header">
            <h3 class="text-center">User log-in</h3>
          </div>
          <div class="card-body">
            <div class="input-group mb-2">
              <div class="input-group-prepend">
                <div class="input-group-text">@</div>
              </div>
              <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username">
            </div>
            <div class="input-group mb-2">
              <div class="input-group-prepend">
                <div class="input-group-text">P</div>
              </div>
              <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary mb-2">Login</button>
            <a href="userindex" class="btn btn-primary mb-2">Test Login</a>
          </div>
        </div>
      </div>

      <div class="col-xs-12 col-sm-6 mt-3">
        <div class="card">
          <div class="card-header">
            <h3 class="text-center">Trainer log-in</h3>
          </div>
          <div class="card-body">
            <div class="input-group mb-2">
              <div class="input-group-prepend">
                <div class="input-group-text">@</div>
              </div>
              <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username">
            </div>
            <div class="input-group mb-2">
              <div class="input-group-prepend">
                <div class="input-group-text">P</div>
              </div>
              <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-danger mb-2">Login</button>
            <a href="trainerindex" class="btn btn-danger  mb-2">Test Login</a>
          </div>
        </div>
      </div>

      <div class="container mt-3">
        <div class="card w-100">
          <div class="card-header">
            <h3 class="text-center">User create account</h3>
          </div>

          <div class="card-body">
            <div class="col-12">
              <nav class="navbar navbar-expand-xs navbar-light bg-light">
                <p class="navbar-brand"></p>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <form class="was-validated">
                    <div class="form-group form-inline">
                      <div class="">
                        <input type="text" class="form-control mr-3 mt-1" placeholder="First name" required>
                      </div>
                      <div class="">
                        <input type="text" class="form-control mr-3 mt-1" placeholder="Last name" required>
                      </div>
                      <div class="">
                        <input class="form-control mt-1" type="date" id="myDate" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group mb-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text">@</div>
                        </div>
                        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group mb-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text">P</div>
                        </div>
                        <input type="password" class="form-control" id="inputPassword3" placeholder="Password" required>
                      </div>
                    </div>
                    <hr>
                    <div class="form-group">
                      <select class="custom-select" required>
                        <option value="" selected>Choose...</option>
                        <option value="1">Male</option>
                        <option value="2">Female</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <h4>Squat</h4>
                      <div class="row">
                        <div class="col-xs-12 col-sm-6 pr-0">
                          <label for="ticketNum">Number of Kilos:</label>
                          <div class="input-group mb-2">
                            <div class="input-group-prepend">
                              <div class="input-group-text pl-1 pr-1">Kg</div>
                            </div>
                            <input id="ticketNum" type="number" name="ticketNum" value="0">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                          <label for="ticketNum">Number of Pounds:</label>
                          <div class="input-group mb-2">
                            <div class="input-group-prepend">
                              <div class="input-group-text pl-1 pr-1">:</div>
                            </div>
                            <input id="ticketNum" type="number" name="ticketNum" value="0">
                          </div>
                        </div>
                      </div>
                      <hr class="mt-0">
                    </div>

                    <div class="form-group">
                      <h4>Bench</h4>
                      <div class="row">
                        <div class="col-xs-12 col-sm-6 pr-0">
                          <label for="ticketNum">Number of Kilos:</label>
                          <div class="input-group mb-2">
                            <div class="input-group-prepend">
                              <div class="input-group-text pl-1 pr-1">Kg</div>
                            </div>
                            <input id="ticketNum" type="number" name="ticketNum" value="0">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                          <label for="ticketNum">Number of Pounds:</label>
                          <div class="input-group mb-2">
                            <div class="input-group-prepend">
                              <div class="input-group-text pl-1 pr-1">:</div>
                            </div>
                            <input id="ticketNum" type="number" name="ticketNum" value="0">
                          </div>
                        </div>
                      </div>
                      <hr class="mt-0">
                    </div>

                    <div class="form-group">
                      <h4>Deadlift</h4>
                      <div class="row">
                        <div class="col-xs-12 col-sm-6 pr-0">
                          <label for="ticketNum">Number of Kilos:</label>
                          <div class="input-group mb-2">
                            <div class="input-group-prepend">
                              <div class="input-group-text pl-1 pr-1">Kg</div>
                            </div>
                            <input id="ticketNum" type="number" name="ticketNum" value="0">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                          <label for="ticketNum">Number of Pounds:</label>
                          <div class="input-group mb-2">
                            <div class="input-group-prepend">
                              <div class="input-group-text pl-1 pr-1">:</div>
                            </div>
                            <input id="ticketNum" type="number" name="ticketNum" value="0">
                          </div>
                        </div>
                      </div>
                      <hr class="mt-0">
                    </div>

                    <div class="form-group">
                      <label for="inputAddress">Address</label>
                      <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                    </div>
                    <div class="form-group">
                      <label for="inputAddress2">Address 2</label>
                      <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputCity">City</label>
                        <input type="text" class="form-control" id="inputCity">
                      </div>
                      <div class="form-group col-md-2">
                        <label for="inputZip">Zip</label>
                        <input type="text" class="form-control" id="inputZip">
                      </div>
                    </div>
                    <hr>

                    <div class="d-block my-3">
                      <label for="cc-name">Card type</label>
                      <div class="custom-control custom-radio">
                        <input id="credit" name="paymentMethod" type="radio" class="form-control custom-control-input" checked="" required="">
                        <label class="custom-control-label" for="credit">Credit card</label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input id="debit" name="paymentMethod" type="radio" class="form-control custom-control-input" required="">
                        <label class="custom-control-label" for="debit">Debit card</label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input id="paypal" name="paymentMethod" type="radio" class="form-control custom-control-input" required="">
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

                    <button type="submit" class="btn btn-primary mb-2">Submit</button>
                  </form>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>

      <div class="container mt-3 mb-4">
        <div class="card w-100">
          <div class="card-header">
            <h3 class="text-center">Trainer create account</h3>
          </div>

          <div class="card-body">
            <div class="col-12">
              <nav class="navbar navbar-expand-xs navbar-light bg-light">
                <p class="navbar-brand"></p>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent1">
                  <form class="was-validated">
                    <div class="form-group form-inline">
                      <div class="">
                        <input type="text" class="form-control mr-3 mt-1" placeholder="First name" required>
                      </div>
                      <div class="">
                        <input type="text" class="form-control mt-1" placeholder="Last name" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
                      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-primary mb-2">Submit</button>
                    <small class="form-text text-muted">We will be in contact to approve the trainer standards are met.</small>
                  </form>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>


    </div>
  </div>



  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


</body>
<footer class="pb-0 mb-0">
  <div class="mt-0 mb-0 bg-success">
    <ul>
      <li><a class="text-dark" href="#">Contact</a></li>
      <li><a class="text-dark" href="#">Help</a></li>
      <li><a class="text-dark" href="#">T&Q</a></li>
      <p>@Fcheck 2018</p>
    </ul>

  </div>
</footer>
</html>

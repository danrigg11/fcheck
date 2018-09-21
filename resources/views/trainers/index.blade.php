@extends('masterlayout')

@section('section')
  <div class="container mb-2">
    <div class="row mt-3">
      <div class="col-5 d-flex align-items-center">
        <div class="row text-center w-100">
          <div class="col-12 mb-0 pb-0">
            <img src="https://thumbs.dreamstime.com/z/default-avatar-profile-icon-grey-photo-placeholder-illustrations-vectors-default-avatar-profile-icon-grey-photo-placeholder-99724602.jpg" style="width:80%; height:100%" alt="Avatar">
          </div>
          <div class="col-12">
            <h3 class="text-center text-danger mb-0">589<img style="height:40px; width:40px" src="{{ asset('images/Icons/icons8-gold-medal-50.png') }}" alt=""></h3>
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

      <div class="col shadow-sm pl-0 pr-0">
        <div class="col-12 bg-light clearfix">
          <p class="float-left pl-3 pt-2">Username: </p>
          <p class="text-primary float-right pr-3 pt-2">DanRigg11</p>
        </div>

        <div class="col-12 bg-light clearfix">
          <p class="float-left pl-3">Name: </p>
          <p class="float-right pr-3">Daniel Rigg</p>
        </div>

        <div class="col-12 bg-light clearfix">
          <p class="float-left pl-3">Age: </p>
          <p class="float-right pr-3">26</p>
        </div>

        <div class="col-12 bg-light clearfix">
          <p class="float-left pl-3">Weight: </p>
          <p class="float-right pr-3">64kg</p>
        </div>

        <div class="col-12 bg-light clearfix">
          <p class="float-left pl-3">Squat PB: </p>
          <p class="float-right pr-3">135kg</p>
        </div>

        <div class="col-12 bg-light clearfix">
          <p class="float-left pl-3">Bench PB: </p>
          <p class="float-right pr-3">87.5kg</p>
        </div>

        <div class="col-12 bg-light clearfix">
          <p class="float-left pl-3">Deadlift PB: </p>
          <p class="float-right pr-3">160kg</p>
        </div>

        <div class="col-12 bg-light clearfix">
          <p class="float-left pl-3">Total: </p>
          <p class="float-right pr-3 text-danger">382.5kg</p>
        </div>

        <div class="col-12 bg-light clearfix">
          <p class="float-left pl-3">IPF Qualifying Total: </p>
          <p class="float-right pr-3 text-danger">450kg</p>
        </div>

      </div>
    </div>
  </div>


  <div class="container">
    <div class="row bg-light pt-3 pb-2">
      <div class="col-12">
        <div id="myBtnContainer" class="bg-light w-100 pl-3">
          <button class="btn active bg-light" onclick="filterSelection('all')"> Show all</button>
          <button class="btn bg-light" onclick="filterSelection('squat')">Squat</button>
          <button class="btn bg-light" onclick="filterSelection('bench')">Bench</button>
          <button class="btn bg-light" onclick="filterSelection('deadlift')">Dealift</button>
          <button class="btn bg-light" onclick="filterSelection('other')">Other</button>
          <button class="btn bg-warning" onclick="filterSelection('uncomplete')">Uncomplete Jobs</button>
        </div>
      </div>
    </div>

  </div>
  <div class="container mb-3">

    <div class="row">

      <div class="col-12">
        <!-- Uncomplete Jobs-->
        <div class="">
          <!-- Job Start -->
          <div class="col-sm-6 col-md-4 mt-2 filterDiv uncomplete">
            <div class="card">
              <div class="card-header bg-warning">
                <h4 href="#" class="">Bench</h4>
              </div>
              <div class="card-body">
                <p class="">Time Left<span class="pl-4 text-danger">0:11:05</span></p>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-white" data-toggle="modal" data-target="#exampleModalCenter0">
                  <spam class="text-primary">James</spam>
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter0" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">James</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">

                        <div class="bg-light clearfix">
                          <p class="float-left pl-3">Age: </p>
                          <p class="float-right pr-3">20</p>
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
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>

                <hr class="mt-1">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                  Complete Job
                </button>

                <!-- Large modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body text-left">



                        <p for="exampleFormControlTextarea1">Textarea</p>
                        <div class="input-group mb-3">
                          <div class="w-100">
                            <textarea class="form-control" aria-label="With textarea"></textarea>
                          </div>
                        </div>
                        <hr>
                        <div class="input-group mb-3">
                            <input type="file" name="img" id="inputGroupFile01" multiple>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>

                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
          <!-- Job End -->
        </div>

        <!-- New Jobs-->
        <div class="">
          <!-- Job Start -->
          <div class="col-sm-6 col-md-4 mt-2 filterDiv bench">
            <div class="card">
              <div class="card-header">
                <h4 href="#" class="">Bench</h4>
              </div>
              <div class="card-body">
                <p class="">11/09/2018<span class="pl-4">11:05</span></p>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-white" data-toggle="modal" data-target="#exampleModalCenter0">
                  <spam class="text-primary">James</spam>
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter0" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">James</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">

                        <div class="bg-light clearfix">
                          <p class="float-left pl-3">Age: </p>
                          <p class="float-right pr-3">20</p>
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
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>

                <hr class="mt-1">

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModalCenter1">
                  <spam class="">Other Info</spam>
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Other Information</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="">
                          <p class="bg-light float-left pl-3 pr-3">Hello World</p>
                        </div>

                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>

                <a href="#" class="btn btn-dark" role="button" aria-pressed="true">Take job</a>
              </div>
            </div>
          </div>
          <!-- Job End -->

          <!-- Job Start -->
          <div class="col-sm-6 col-md-4 mt-2 filterDiv squat">
            <div class="card">
              <div class="card-header">
                <h4 href="#" class="">Squat</h4>
              </div>
              <div class="card-body">
                <p class="">10/09/2018<span class="pl-4">14:05</span></p>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-white" data-toggle="modal" data-target="#exampleModalCenter3">
                  <spam class="text-primary">Dan1991</spam>
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Dan1991</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">

                        <div class="bg-light clearfix">
                          <p class="float-left pl-3">Age: </p>
                          <p class="float-right pr-3">20</p>
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
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>

                <hr class="mt-1">

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModalCenter4">
                  <spam class="">Other Info</spam>
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Other Information</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="">
                          <p class="bg-light float-left pl-3 pr-3">Hello World</p>
                        </div>

                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>

                <a href="#" class="btn btn-dark" role="button" aria-pressed="true">Take job</a>
              </div>
            </div>
          </div>
          <!-- Job End -->

          <!-- Job Start -->
          <div class="col-sm-6 col-md-4 mt-2 filterDiv deadlift">
            <div class="card">
              <div class="card-header">
                <h4 href="#" class="">Deadlift</h4>
              </div>
              <div class="card-body">
                <p class="">08/09/2018<span class="pl-4">09:05</span></p>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-white" data-toggle="modal" data-target="#exampleModalCenter5">
                  <spam class="text-primary">Dan1991</spam>
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter5" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Dan1991</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">

                        <div class="bg-light clearfix">
                          <p class="float-left pl-3">Age: </p>
                          <p class="float-right pr-3">20</p>
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
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>

                <hr class="mt-1">

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModalCenter6">
                  <spam class="">Other Info</spam>
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter6" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Other Information</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="">
                          <p class="bg-light float-left pl-3 pr-3">Hello World</p>
                        </div>

                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>

                <a href="#" class="btn btn-dark" role="button" aria-pressed="true">Take job</a>
              </div>
            </div>
          </div>
          <!-- Job End -->

          <!-- Job Start -->
          <div class="col-sm-6 col-md-4 mt-2 filterDiv other">
            <div class="card">
              <div class="card-header">
                <h4 href="#" class="">Other</h4>
              </div>
              <div class="card-body">
                <p class="">08/09/2018<span class="pl-4">07:05</span></p>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-white" data-toggle="modal" data-target="#exampleModalCenter7">
                  <spam class="text-primary">Erik</spam>
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter7" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Erik</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">

                        <div class="bg-light clearfix">
                          <p class="float-left pl-3">Age: </p>
                          <p class="float-right pr-3">20</p>
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
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>

                <hr class="mt-1">

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModalCenter8">
                  <spam class="">Other Info</spam>
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter8" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Other Information</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="">
                          <p class="bg-light float-left pl-3 pr-3">Hello World</p>
                        </div>

                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>

                <a href="#" class="btn btn-dark" role="button" aria-pressed="true">Take job</a>
              </div>
            </div>
          </div>
          <!-- Job End -->

          <!-- Job Start -->
          <div class="col-sm-6 col-md-4 mt-2 filterDiv bench">
            <div class="card">
              <div class="card-header">
                <h4 href="#" class="">Bench</h4>
              </div>
              <div class="card-body">
                <p class="">11/09/2018<span class="pl-4">11:05</span></p>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-white" data-toggle="modal" data-target="#exampleModalCenter0">
                  <spam class="text-primary">James</spam>
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter0" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">James</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">

                        <div class="bg-light clearfix">
                          <p class="float-left pl-3">Age: </p>
                          <p class="float-right pr-3">20</p>
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
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>

                <hr class="mt-1">

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModalCenter1">
                  <spam class="">Other Info</spam>
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Other Information</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="">
                          <p class="bg-light float-left pl-3 pr-3">Hello World</p>
                        </div>

                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>

                <a href="#" class="btn btn-dark" role="button" aria-pressed="true">Take job</a>
              </div>
            </div>
          </div>
          <!-- Job End -->

          <!-- Job Start -->
          <div class="col-sm-6 col-md-4 mt-2 filterDiv squat">
            <div class="card">
              <div class="card-header">
                <h4 href="#" class="">Squat</h4>
              </div>
              <div class="card-body">
                <p class="">10/09/2018<span class="pl-4">14:05</span></p>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-white" data-toggle="modal" data-target="#exampleModalCenter3">
                  <spam class="text-primary">Dan1991</spam>
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Dan1991</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">

                        <div class="bg-light clearfix">
                          <p class="float-left pl-3">Age: </p>
                          <p class="float-right pr-3">20</p>
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
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>

                <hr class="mt-1">

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModalCenter4">
                  <spam class="">Other Info</spam>
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Other Information</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="">
                          <p class="bg-light float-left pl-3 pr-3">Hello World</p>
                        </div>

                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>

                <a href="#" class="btn btn-dark" role="button" aria-pressed="true">Take job</a>
              </div>
            </div>
          </div>
          <!-- Job End -->

          <!-- Job Start -->
          <div class="col-sm-6 col-md-4 mt-2 filterDiv deadlift">
            <div class="card">
              <div class="card-header">
                <h4 href="#" class="">Deadlift</h4>
              </div>
              <div class="card-body">
                <p class="">08/09/2018<span class="pl-4">09:05</span></p>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-white" data-toggle="modal" data-target="#exampleModalCenter5">
                  <spam class="text-primary">Dan1991</spam>
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter5" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Dan1991</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">

                        <div class="bg-light clearfix">
                          <p class="float-left pl-3">Age: </p>
                          <p class="float-right pr-3">20</p>
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
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>

                <hr class="mt-1">

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModalCenter6">
                  <spam class="">Other Info</spam>
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter6" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Other Information</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="">
                          <p class="bg-light float-left pl-3 pr-3">Hello World</p>
                        </div>

                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>

                <a href="#" class="btn btn-dark" role="button" aria-pressed="true">Take job</a>
              </div>
            </div>
          </div>
          <!-- Job End -->
        </div>



      </div>

    </div>
  </div>





</div>

@endsection

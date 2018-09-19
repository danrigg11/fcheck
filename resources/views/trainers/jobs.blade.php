@extends('masterlayout')

@section('section')
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-white mb-0">
      <li class="breadcrumb-item"><a href="/trainerindex">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Jobs</li>
    </ol>
  </nav>
  <div class="container">
    <div class="row mt-3">


      <div class="col-12 shadow-sm pl-0 pr-0 bg-light">
        <h4 class="pl-3 pt-2"> Available Jobs</h4>
      </div>
      <div class="col-12 bg-light">
        <hr class="bg-light mt-0 mb-0">
        <small id="emailHelp" class="form-text text-muted bg-light pt-1 mb-0">Filter.</small>
      </div>


      <div id="myBtnContainer" class="bg-light w-100 pl-3">
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

@endsection

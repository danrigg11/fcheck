@extends('masterlayout')

@section('section')
  <div class="ml-2 mr-2 mb-4 ">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb bg-white mb-0">
        <li class="breadcrumb-item"><a href="/userindex">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Messages</li>
      </ol>
    </nav>
    <div class="row mt-3 pb-1 messengerhw ml-1">
      <div class="col-4 list-group-item rounded">
        <div style="height:100%" class="">
          <h3 class="">Chats</h3>
          <ul class="list-group">
            <li class="list-group-item bg-primary">James F<span class="float-right">13:27</span></li>
            <li class="list-group-item bg-primary">James F<span class="float-right">13:27</span></li>
            <li class="list-group-item bg-primary">James F<span class="float-right">13:27</span></li>
            <li class="list-group-item">James F<span class="float-right">13:27</span></li>
            <li class="list-group-item">James F<span class="float-right">13:27</span></li>
            <li class="list-group-item">James F<span class="float-right">13:27</span></li>
            <li class="list-group-item">James F<span class="float-right">13:27</span></li>
            <li class="list-group-item">James F<span class="float-right">13:27</span></li>
          </ul>
        </div>

      </div>

      <div class="col-8 pl-0">
        <div style="height:100%" class="card pl-0 pr-0">
          <div class="card-header w-100">
            <h5 class="text-center">James F</h5>
          </div>
          <div class="card-body">
            <!-- chat -->
            <div class="row">
              <div class="col-12">
                <p class="float-left">Hello</p>
              </div>
              <div class="col-12">
                <p class="float-right">Hi</p>
              </div>
              <div class="col-12">
                <p class="float-left">Are you free to talk?</p>
              </div>
            </div>
          </div>
          <div class="card-footer pb-1">
            <p class="">Type here..</p>
          </div>
        </div>
      </div>



    </div>

  </div>


@endsection

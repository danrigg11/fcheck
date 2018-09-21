@extends('masterlayout')

@section('section')
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-white mb-0">
      <li class="breadcrumb-item"><a href="userindex">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Other</li>
    </ol>
  </nav>
  <div class="container">
    <div>
    <h3 class="text-center">Submit Types</h3>
    <hr>
    <h5>Free Submit<img style="height:40px; width:40px" src="{{ asset('images/Icons/icons8-captain-america-48.png') }}" alt=""></h5>
    <p><img style="height:40px; width:40px" src="{{ asset('images/Icons/icons8-price-tag-pound-50.png') }}" alt=""> Free submit.</p>
    <p><img style="height:40px; width:40px" src="{{ asset('images/Icons/icons8-align-text-left-50.png') }}" alt=""> Text feedback.</p>
    <p><img style="height:40px; width:40px" src="{{ asset('images/Icons/icons8-tv-show-50.png') }}" alt=""> Possible Video.</p>
    <p><img style="height:40px; width:40px" src="{{ asset('images/Icons/icons8-watch-50.png') }}" alt=""> Up to 24 hours response time.</p>
    <div class="col-12 pt-3 pb-3 ">
      <a href="/other/freesubmit" class="btn btn-dark btn-lg btn-block shadow">Free Submit</a>
    </div>
    <br>
    <h5>Paid Submit<img style="height:40px; width:40px" src="{{ asset('images/Icons/icons8-iron-man-64.png') }}" alt=""></h5>
    <p><img style="height:40px; width:40px" src="{{ asset('images/Icons/icons8-align-text-left-50.png') }}" alt=""> Text feedback.</p>
    <p><img style="height:40px; width:40px" src="{{ asset('images/Icons/icons8-tv-show-50.png') }}" alt=""> Video feedback.</p>
    <p><img style="height:40px; width:40px" src="{{ asset('images/Icons/icons8-watch-50.png') }}" alt=""> Response time based on cost.</p>
    <div class="col-12 pt-3 pb-3 ">
      <a href="/other/paidsubmit" class="btn btn-dark btn-lg btn-block shadow">Paid Submit</a>
    </div>
    <br>
    <h5>Pro Submit<img style="height:45px; width:45px" src="{{ asset('images/Icons/icons8-hulk-48.png') }}" alt=""></h5>
    <p><img style="height:40px; width:40px" src="{{ asset('images/Icons/icons8-documentary-50.png') }}" alt=""> Video calling.</p>
    <p><img style="height:40px; width:40px" src="{{ asset('images/Icons/icons8-price-tag-pound-50.png') }}" alt=""> Price per minute optional.</p>
    <div class="col-12 pt-3 pb-3 ">
      <a href="/other/prosubmit" class="btn btn-dark btn-lg btn-block shadow">Pro Submit</a>
    </div>
    </div>
  </div>

@endsection

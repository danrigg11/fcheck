<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
  public function index()
  {
    return view('index');
  }


  public function squat()
  {
    return view('squat/squat');
  }
  public function squatfreesubmit()
  {
    return view('squat/squatfreesubmit');
  }
  public function squatpaidsubmit()
  {
    return view('squat/squatpaidsubmit');
  }



  public function bench()
  {
    return view('bench/bench');
  }
  public function deadlift()
  {
    return view('deadlift/deadlift');
  }

}

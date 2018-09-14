<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
  public function index()
  {
    return view('index');
  }
  public function trainer()
  {
    return view('users/trainerspage');
  }
  public function user()
  {
    return view('users/index');
  }


  public function squat()
  {
    return view('users/squat/squat');
  }
  public function squatfreesubmit()
  {
    return view('users/squat/squatfreesubmit');
  }
  public function squatpaidsubmit()
  {
    return view('users/squat/squatpaidsubmit');
  }
  public function squatprosubmit()
  {
    return view('users/squat/squatprosubmit');
  }



  public function bench()
  {
    return view('users/bench/bench');
  }
  public function deadlift()
  {
    return view('users/deadlift/deadlift');
  }

// Trainers Section //
  public function trainerindex()
  {
    return view('trainers/index');
  }
  public function trainerjobs()
  {
    return view('trainers/jobs');
  }

}

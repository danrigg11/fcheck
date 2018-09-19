<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
  // User Section //
  public function index()
  {return view('index');}

  public function trainer()
  {return view('users/trainerspage');}

  public function userindex()
  {return view('users/index');}


  public function squat()
  {return view('users/squat/squat');}

  public function squatfree()
  {return view('users/squat/squatfreesubmit');}

  public function squatpaidsubmit()
  {return view('users/squat/squatpaidsubmit');}

  public function squatprosubmit()
  {return view('users/squat/squatprosubmit');}


  public function bench()
  {return view('users/bench/bench');}

  public function benchfree()
  {return view('users/bench/benchfreesubmit');}

  public function benchpaidsubmit()
  {return view('users/bench/benchpaidsubmit');}

  public function benchprosubmit()
  {return view('users/bench/benchprosubmit');}


  public function deadlift()
  {return view('users/deadlift/deadlift');}

  public function deadliftfree()
  {return view('users/deadlift/deadliftfreesubmit');}

  public function deadliftpaidsubmit()
  {return view('users/deadlift/deadliftpaidsubmit');}

  public function deadliftprosubmit()
  {return view('users/deadlift/deadliftprosubmit');}

// Trainers Section //
  public function trainerindex()
  {return view('trainers/index');}

  public function trainerjobs()
  {return view('trainers/jobs');}

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use App\Upcoming;

class PagesController extends Controller
{
  public function index() {

    $sliders = Slider::all();
    $upcoming = Upcoming::take(6)->get();
    return view('pages.index', compact('sliders', 'upcoming'));
  }

  public function alumni() {

    return view('pages.alumni');
  }

  public function contact() {

    return view('pages.contact');
  }

  public function about() {

    return view('pages.about');
  }

  public function gallery() {

    return view('pages.gallery');
  }

  public function blog() {

    return view('pages.blog');
  }

  public function giving() {

    return view('pages.giving');
  }
}

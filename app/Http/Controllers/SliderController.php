<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function sliders(){
        $sliders = \App\Models\Slider::all();
        return view('welcome',compact('sliders'));
    }
}

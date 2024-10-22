<?php

namespace App\Http\Controllers;

use App\Models\Boyut;
use App\Models\IletisimForm;
use App\Models\ProtilesUrun;
use App\Models\Slider;
use App\Models\Urun;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $slider = Slider::all()->count();
        $boyut = Boyut::all()->count();
        $urun = Urun::all()->count();
        $protiles = ProtilesUrun::all()->count();
        $messages = IletisimForm::orderBy('created_at','desc')->limit(10)->get();
        return view('index',compact('slider','boyut','urun','messages','protiles'));
    }
}

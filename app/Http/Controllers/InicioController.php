<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Section;
use App\Texto;
use App\Img;

class InicioController extends Controller
{
    public function index(){
        $sections = section::all();

        $img_slider = img::where('section_id',1)->where('category_id',1)->get();
        $img_proc = img::where('section_id',1)->where('category_id',2)->get();
        $img_slider2 = img::where('section_id',1)->where('category_id',4)->get();
        $img_team = img::where('section_id',1)->where('category_id',5)->get();
        $img_blog = img::where('section_id',1)->where('category_id',7)->get();

        $slider_textos = texto::where('section_id',1)->where('category_id',1)->get();

        return view('welcome')->with(compact('sections','slider_textos','img_slider','img_proc','img_slider2','img_team','img_blog'));
    }
}

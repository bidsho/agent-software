<?php

namespace App\Http\Controllers;
use App\Models\Property;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Home(){
        $property = Property::latest()->get();
        return view('welcome',[
            'property'=> $property
        ]);
    }
}

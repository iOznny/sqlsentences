<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function sentenceSQL (Request $request) {

        dd($request->sentence, $request->entityone, $request->entitytwo);


    }
}

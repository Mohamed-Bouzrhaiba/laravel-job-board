<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class tagController extends Controller
{
    public function __invoke(Tag $tag){

        return view("results",['res'=>$tag->jobs]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class searchController extends Controller
{
    public function __invoke(){
        $res = Job::where('title','LIKE','%'.request('q').'%')->get();
        return view("results",['res'=>$res]);
    }
}

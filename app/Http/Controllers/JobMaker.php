<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\LongTask;

class JobMaker extends Controller
{
    public function index()
    {
        dispatch(new LongTask());
    }
}

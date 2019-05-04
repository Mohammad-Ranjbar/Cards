<?php

namespace App\Http\Controllers;

use App\Jobs\Job;
use App\Jobs\LogStatus;
use Illuminate\Http\Request;

class QueueController extends Controller
{
    public function index()
    {
        Job::dispatch(new LogStatus);
    }
}

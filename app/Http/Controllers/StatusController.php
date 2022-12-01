<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function index()
    {
        return view('statuses.index');
    }

    public function show(Status $status)
    {
        return view('statuses.show', compact('status'));
    }
}

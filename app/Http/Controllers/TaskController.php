<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function store(Request $request)
    {
    $attr = $request->all();

    // Create new post
    $agenda = auth()->user()->agendas()->create($attr);
    }

}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\Agenda;
use Carbon\Carbon;

class TaskController extends Controller
{
    public function index()
    {
        $agendas = Agenda::get();

        return view('AllTask.AllTask', compact('agendas'));
    }

    public function store(TaskRequest $taskRequest)
    {
        $attr = $taskRequest->all();
        $deadline = new Carbon($taskRequest->tenggat_waktu);
        $now = Carbon::now();

        $attr['status'] = ($deadline->diff($now)->days == 0) ? 'today' : (($deadline->diff($now)->days >= 1) ? 'upcoming' : 'late');

        auth()->user()->agendas()->create($attr);

        return redirect('/');
    }

    public function destroy(Agenda $agenda)
    {
        $agenda->delete();
        request()->session()->flash('success', 'Agenda berhasil dihapus');
        return redirect('/');
    }

}

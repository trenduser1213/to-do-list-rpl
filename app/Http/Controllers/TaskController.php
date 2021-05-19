<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\Agenda;
use Carbon\Carbon;

class TaskController extends Controller
{
    public function index()
    {
        $now = Carbon::now()->timezone('Asia/Jakarta');
        $agendas = auth()->user()->agendas->where('tenggat_waktu', '>=', $now)->groupBy(function($data) {
            $deadline = new Carbon($data->tenggat_waktu);
            return $deadline->format('d F Y');
        })->sortBy('tenggat_waktu');

        $lateTasks = auth()->user()->agendas->where('tenggat_waktu', '<', $now);

        return view('AllTask.AllTask', compact('agendas', 'lateTasks'));
    }

    public function store(TaskRequest $taskRequest)
    {
        $attr = $taskRequest->all();
        $deadline_date = new Carbon($taskRequest->tenggat_waktu);
        $deadline = $deadline_date->format('Y-m-d');
        $now = Carbon::now()->timezone('Asia/Jakarta')->format('Y-m-d');

        $attr['status'] = ($now == $deadline) ? 'today' : (($now < $deadline) ? 'upcoming' : 'late');

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

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

        $now = Carbon::now();
        $priority = Agenda::orderBy('tenggat_waktu', 'asc')
                ->orderBy('skala_prioritas', 'desc')
                ->where('tenggat_waktu','>',$now)
                ->get();
        return view('AllTask.AllTask', compact('agendas','priority'));
    }

    public function store(TaskRequest $taskRequest)
    {
        $attr = $taskRequest->all();
        $deadline = new Carbon($taskRequest->tenggat_waktu);
        $now = Carbon::now();

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

    public function update(TaskRequest $taskRequest,Agenda $agenda ){
        $attr = $taskRequest->except(['_method','_token']);
        $deadline = new Carbon($taskRequest->tenggat_waktu);
        $now = Carbon::now();

        $attr['status'] = ($now == $deadline) ? 'today' : (($now < $deadline) ? 'upcoming' : 'late');

        auth()->user()->agendas()->where('id','=',$agenda->id)->update($attr);

        return redirect('/');
    }

    public function setDataForm(Agenda $agenda)
    {
        return view('AllTask.form-control-edit', ['agenda' => $agenda]);
    }
}

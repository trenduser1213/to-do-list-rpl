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
        $agendas = auth()->user()->agendas->where('tenggat_waktu', '>=', $now)->where('status', '!=', 'done')->groupBy(function($data) {
            $deadline = new Carbon($data->tenggat_waktu);
            return $deadline->format('d F Y');
        })->sortBy('tenggat_waktu');

        $priority = Agenda::orderBy('tenggat_waktu', 'asc')
                ->orderBy('skala_prioritas', 'desc')
                ->where('tenggat_waktu','>',$now)
                ->where('status', '!=', 'done')
                ->get();
        
        $lateTasks = auth()->user()->agendas->where('tenggat_waktu', '<', $now)->where('status', '!=', 'done');

        $doneTasks = auth()->user()->agendas->where('status', '=', 'done');

        return view('AllTask.AllTask', compact('agendas', 'lateTasks', 'priority', 'doneTasks', 'now'));
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

    public function setDoneTask(Agenda $agenda)
    {
        $agenda->update([
            'status' => 'done',
        ]);

        return redirect('/');
    }
}

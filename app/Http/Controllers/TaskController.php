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

        $priority = Agenda::orderBy('tenggat_waktu', 'asc')
                ->orderBy('skala_prioritas', 'desc')
                ->where('tenggat_waktu','>',$now)
                ->get();
        $lateTasks = auth()->user()->agendas->where('tenggat_waktu', '<', $now);

        return view('AllTask.AllTask', compact('agendas', 'lateTasks','priority'));
    }

    public function store(TaskRequest $taskRequest)
    {
        $attr = $taskRequest->all();
        $deadline_date = new Carbon($taskRequest->tenggat_waktu);
        $deadline = $deadline_date->format('Y-m-d');
        $now = Carbon::now()->timezone('Asia/Jakarta')->format('Y-m-d');

        $attr['status'] = ($now == $deadline) ? 'today' : (($now < $deadline) ? 'upcoming' : 'late');

        sscanf($taskRequest->durasi, "%d:%d:%d", $hours, $minutes, $seconds);

        $attr['durasi'] = isset($seconds) ? $hours * 3600 + $minutes * 60 + $seconds : $hours * 60 + $minutes;

        auth()->user()->agendas()->create($attr);

        request()->session()->flash('success', 'The post was created');
        
        return redirect('/?action=add');
    }

    public function destroy(Agenda $agenda)
    {
        $agenda->delete();
        request()->session()->flash('success', 'Agenda berhasil dihapus');
        return redirect('/?action=delete');
    }

    public function update(TaskRequest $taskRequest,Agenda $agenda ){
        $attr = $taskRequest->except(['_method','_token']);
        $deadline = new Carbon($taskRequest->tenggat_waktu);
        $now = Carbon::now();

        $attr['status'] = ($now == $deadline) ? 'today' : (($now < $deadline) ? 'upcoming' : 'late');

        sscanf($taskRequest->durasi, "%d:%d:%d", $hours, $minutes, $seconds);

        $attr['durasi'] = isset($seconds) ? $hours * 3600 + $minutes * 60 + $seconds : $hours * 60 + $minutes;

        auth()->user()->agendas()->where('id','=',$agenda->id)->update($attr);

        return redirect('/?action=done');
    }

    public function setDataForm(Agenda $agenda)
    {
        return view('AllTask.form-control-edit', ['agenda' => $agenda]);
    }
}

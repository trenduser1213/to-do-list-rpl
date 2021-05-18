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
    
    public function addAgendas(request $request){
        $userid = Auth::user()->id;
        $nama_agenda = $request->activity;
        $tenggat_waktu = $request->dateandtime;
        $deskripsi = $request->description;
        $label = 'label';
        $durasi = 23;
        $status = 'undone';
        $skala_prioritas = 0;

        switch($request->priority){
            case 'low':
                $skala_prioritas = 1;
                break;
            case 'medium':
                $skala_prioritas = 2;
                break;
            case 'high':
                $skala_prioritas = 3;
                break;
            default:
                $skala_prioritas = 0;
        }

        $agenda = new Agenda();
        $agenda->user_id = $userid;
        $agenda->nama_agenda = $nama_agenda;
        $agenda->tenggat_waktu = $tenggat_waktu;
        $agenda->deskripsi = $deskripsi;
        $agenda->label = $label;
        $agenda->durasi = $durasi;
        $agenda->status = $status;
        $agenda->skala_prioritas = $skala_prioritas;
        $agenda->save();

        request()->session()->flash('success', 'Agenda sudah berhasil dibuat');
        return redirect('home');
    }

    public function store(Request $request)
    {
    $attr = $request->all();

    // Create new post
    $agenda = auth()->user()->agendas()->create($attr);
    }

}

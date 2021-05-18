<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agenda;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function showAllTask(){
        return view('AllTask.AllTask');
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

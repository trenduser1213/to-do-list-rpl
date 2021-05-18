<?php

use App\Models\Agenda;
use App\Task;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

/**
 * Display All Tasks
 */
Route::get('/', function () {
    return view('agendas', [
        'agendas' => Agenda::orderBy('created_at', 'asc')->get()
    ]);
});
/**
 * Add A New Task
 */
Route::post('/agenda', function (Request $request) {
    /**
 * Adding data too database mamank
 */
    $agenda = new Agenda;
    $agenda->nama_agenda = $request->nama_agenda;
    $agenda->tenggat_waktu = $request->tenggat_waktu;
    $agenda->deskripsi = $request->deskripsi;
    $agenda->tenggat_waktu = $request->tenggat_waktu;skala_prioritas
    $agenda->save();

    return redirect('/');
});

public function store(Request $request)
{
    dd($request->all());
    $attr = $request->all();

    // Create new post
    $post = auth()->user()->posts()->create($attr);
}





/**
 * Delete An Existing Task
 */
Route::delete('/agenda/{id}', function ($id) {
    Task::findOrFail($id)->delete();

    return redirect('/');
    //
});
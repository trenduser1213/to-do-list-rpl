<?php

use App\Models\Agenda;
use App\Task;
use Illuminate\Http\Request;

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
    $validator = Validator::make($request->all(), [
        'name' => 'required|max:255',
    ]);

    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }

    /**
 * Adding data too database mamank
 */

    $agenda = new Agenda;
    $agenda->name = $request->name;
    $agenda->save();

    return redirect('/');
});



/**
 * Delete An Existing Task
 */
Route::delete('/agenda/{id}', function ($id) {
    Task::findOrFail($id)->delete();

    return redirect('/');
    //
});
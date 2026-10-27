<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    //menampilkan halaman utama blade
   public function indexView()
{
    return view('tasks.index');
}

    //API:Mengambil semua data (JSON)
    public function index()
    {
        return response()->json(Task::all());
    }

    //API: menyimpan data baru
    public function store(Request $request)
    {
        $request->validate([
            'title'=> 'required|string|max:255',
            'desc' => 'required|string',
        ]);
        $task = Task::create($request->all());

        return response()->json([
            'success' => true,
            'message'=> 'tugas berhasil ditambahkan!',
            'data' => $task
        ]);
    }

    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();

        return response()->json([
            'success' => true,
            'message' => 'Tugas Berhasil di hapus!'
        ]);
    }
}

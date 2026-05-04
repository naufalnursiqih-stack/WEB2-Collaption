<?php

namespace \App\Http\Controllers;

use \App\Models\Task; // Import Model Task
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // Menampilkan halaman form (View di atas)
    public function create()
    {
        return view('tasks.create');
    }

    // Menyimpan data ke database [POST]
    public function store(Request $request)
    {
        // 1. Validasi: Pastikan input tidak kosong dan minimal 3 karakter
        $request->validate([
            'task_name' => 'required|min:3|max:255',
        ], [
            'task_name.required' => 'Nama tugas tidak boleh kosong!',
            'task_name.min' => 'Nama tugas minimal 3 karakter.',
        ]);

        // 2. Simpan ke database menggunakan Model
        Task::create([
            'task_name' => $request->task_name,
            'is_completed' => false // Default belum selesai
        ]);

        // 3. Redirect (Arahkan) kembali ke halaman daftar tugas
        // Temanmu yang bagian 'Read' akan mengurus route 'tasks.index'
        return redirect()->route('tasks.index')->with('success', 'Tugas baru berhasil ditambahkan!');
    }
}
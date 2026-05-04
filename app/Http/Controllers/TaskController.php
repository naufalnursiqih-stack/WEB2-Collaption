<?php

namespace App\Http\Controllers;

use App\Models\Task; // <-- HARUS DI SINI, BUKAN DI DALAM CLASS
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // ... sisa kode kamu di bawahnya tetap sama ...
    // [GET] Menampilkan semua task
    public function index() 
    {
        $tasks = Task::all();
        
        return response()->json([
            'success' => true,
            'message' => 'Daftar task berhasil diambil',
            'data' => $tasks
        ], 200);
    }

    // [DELETE] Menghapus task berdasarkan ID
    public function destroy($id) 
    {
        $task = Task::find($id);

        // Validasi jika data tidak ditemukan di database
        if (!$task) {
            return response()->json([
                'success' => false,
                'message' => 'Task tidak ditemukan!'
            ], 404);
        }

        // Hapus data jika ada
        $task->delete();
        
        return response()->json([
            'success' => true,
            'message' => 'Task berhasil dihapus'
        ], 200);
    }
}
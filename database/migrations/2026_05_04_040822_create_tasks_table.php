<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id(); // ID otomatis (Primary Key)

            // Tambahkan kolom di bawah ini
            $table->string('task_name'); // Ini untuk menyimpan teks tugasnya
            $table->boolean('is_completed')->default(false); // Opsional: untuk status tugas (selesai/belum)

            $table->timestamps(); // Otomatis membuat kolom created_at & updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Tugas Baru</title>
    <!-- Tambahkan CSS sederhana agar enak dilihat -->
    <style>
        body { font-family: sans-serif; margin: 50px; }
        .container { max-width: 400px; }
        input[type="text"] { width: 100%; padding: 10px; margin-bottom: 10px; }
        button { padding: 10px 20px; background: blue; color: white; border: none; cursor: pointer; }
        .error { color: red; font-size: 14px; }
    </style>
</head>
<body>

    <div class="container">
        <h2>Tambah Tugas Baru</h2>

        <!-- Tampilkan pesan error jika validasi gagal -->
        @if ($errors->any())
            <div class="error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- FORM CREATE -->
        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf <!-- PENTING: Keamanan Laravel -->
            
            <label for="task_name">Nama Tugas:</label>
            <input type="text" name="task_name" id="task_name" placeholder="Contoh: Belajar Laravel" value="{{ old('task_name') }}">
            
            <button type="submit">Simpan Tugas</button>
        </form>

        <br>
        <a href="{{ route('tasks.index') }}">Kembali ke Daftar Tugas</a>
    </div>

</body>
</html>
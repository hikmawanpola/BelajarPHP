@extends('layouts.app')

@section('content')
<h1 class="text-xl font-bold mb-4">Tambah Siswa</h1>

<form action="{{ route('siswas.store') }}" method="POST" class="space-y-4">
    @csrf

    <div>
        <label class="block">NIM</label>
        <input type="text" name="nim" class="w-full border rounded p-2" required>
    </div>

    <div>
        <label class="block">Nama</label>
        <input type="text" name="nama" class="w-full border rounded p-2" required>
    </div>

    <div>
        <label class="block">Kelas</label>
        <input type="text" name="kelas" class="w-full border rounded p-2" required>
    </div>

    <div>
        <label class="block">Jenis Kelamin</label>
        <select name="jenis_kelamin_id" class="w-full border rounded p-2" required>
            <option value="">-- Pilih Jenis Kelamin --</option>
            @foreach($jenisKelamins as $jk)
                <option value="{{ $jk->id }}">{{ $jk->nama }}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
</form>
@endsection

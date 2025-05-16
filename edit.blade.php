@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4 max-w-md">
    <h1 class="text-2xl font-bold mb-4">Edit Data Siswa</h1>

    <form action="{{ route('siswas.update', $siswa->id) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label for="nim" class="block font-medium">NIM</label>
            <input type="text" name="nim" id="nim" value="{{ old('nim', $siswa->nim) }}" class="w-full border border-gray-300 p-2 rounded" required>
            @error('nim') <p class="text-red-600">{{ $message }}</p> @enderror
        </div>

        <div>
            <label for="nama" class="block font-medium">Nama</label>
            <input type="text" name="nama" id="nama" value="{{ old('nama', $siswa->nama) }}" class="w-full border border-gray-300 p-2 rounded" required>
            @error('nama') <p class="text-red-600">{{ $message }}</p> @enderror
        </div>

        <div>
            <label for="kelas" class="block font-medium">Kelas</label>
            <input type="text" name="kelas" id="kelas" value="{{ old('kelas', $siswa->kelas) }}" class="w-full border border-gray-300 p-2 rounded" required>
            @error('kelas') <p class="text-red-600">{{ $message }}</p> @enderror
        </div>

        <div>
            <label for="jenis_kelamin_id" class="block font-medium">Jenis Kelamin</label>
           <select name="jenis_kelamin_id" class="w-full border rounded p-2" required>
    <option value="">-- Pilih Jenis Kelamin --</option>
    @foreach($jenisKelamins as $jk)
        <option value="{{ $jk->id }}" {{ $jk->id == $siswa->jenis_kelamin_id ? 'selected' : '' }}>
            {{ $jk->nama }}
        </option>
    @endforeach
</select>

            @error('jenis_kelamin_id') <p class="text-red-600">{{ $message }}</p> @enderror
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Update</button>
        <a href="{{ route('siswas.index') }}" class="ml-4 text-gray-600 hover:underline">Batal</a>
    </form>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Data Siswa</h1>

    <a href="{{ route('siswas.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Tambah Siswa</a>

    @if(session('success'))
        <div class="bg-green-200 p-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <table class="w-full table-auto border-collapse border border-gray-300">
        <thead>
            <tr class="bg-gray-200">
                <th class="border border-gray-300 px-4 py-2">NIM</th>
                <th class="border border-gray-300 px-4 py-2">Nama</th>
                <th class="border border-gray-300 px-4 py-2">Kelas</th>
                <th class="border border-gray-300 px-4 py-2">Jenis Kelamin</th>
                <th class="border border-gray-300 px-4 py-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($siswas as $siswa)
            <tr>
                <td class="border border-gray-300 px-4 py-2">{{ $siswa->nim }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $siswa->nama }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $siswa->kelas }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $siswa->jenisKelamin->nama }}</td>
                <td class="border border-gray-300 px-4 py-2">
                    <a href="{{ route('siswas.edit', $siswa->id) }}" class="text-blue-600 hover:underline mr-2">Edit</a>
                    <form action="{{ route('siswas.destroy', $siswa->id) }}" method="POST" class="inline" onsubmit="return confirm('Yakin ingin hapus data?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 hover:underline">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="border border-gray-300 px-4 py-2 text-center">Tidak ada data siswa.</td>
            </tr>
            @endforelse
        </tbody>
    </table>

    <div class="mt-4">
        {{ $siswas->links() }}
    </div>
</div>
@endsection

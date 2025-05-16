<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\JenisKelamin;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $siswas = Siswa::with('jenisKelamin')->paginate(10);
        return view('siswas.index', compact('siswas'));
    }

    public function create()
    {
        $jenisKelamins = JenisKelamin::all();
    return view('siswas.create', compact('jenisKelamins'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nim' => 'required|unique:siswas,nim',
            'nama' => 'required',
            'kelas' => 'required',
            'jenis_kelamin_id' => 'required|exists:jenis_kelamins,id',
        ]);

        Siswa::create($request->all());
        return redirect()->route('siswas.index')->with('success', 'Data siswa berhasil ditambahkan.');
    }

    public function edit(Siswa $siswa)
    {
       $siswa = Siswa::findOrFail($siswa);
    $jenisKelamins = JenisKelamin::all();
    return view('siswas.edit', compact('siswa', 'jenisKelamins'));
    }

    public function update(Request $request, Siswa $siswa)
    {
        $request->validate([
            'nim' => 'required|unique:siswas,nim,' . $siswa->id,
            'nama' => 'required',
            'kelas' => 'required',
            'jenis_kelamin_id' => 'required|exists:jenis_kelamins,id',
        ]);

        $siswa->update($request->all());
        return redirect()->route('siswas.index')->with('success', 'Data siswa berhasil diperbarui.');
    }

    public function destroy(Siswa $siswa)
    {
        $siswa->delete();
        return redirect()->route('siswas.index')->with('success', 'Data siswa berhasil dihapus.');
    }
}

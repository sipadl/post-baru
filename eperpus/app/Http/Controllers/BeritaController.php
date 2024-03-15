<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Berita;
    
    class BeritaController extends Controller
    {
        public function index()
        {
            $data = Berita::all();
            return view('berita.index', compact('data'));
        }
    
        public function show($id)
        {
            $data = Berita::find($id);
            return view('berita.show', compact('data'));
        }
    
        public function create()
        {
            return view('Berita.create');
        }
    
        public function store(Request $request)
        {
            $request->validate([
                'judul' => 'required','image' => 'required','isi' => 'required','penulis' => 'required'
            ]);
            try {
                $data = Berita::create($request->except('token'));
                return redirect()->route('berita.index', ['id' => $data->id])->with('success', 'Data berhasil ditambahkan.');
            } catch (Exception $e) {
                return redirect()->route('berita.create')->withInput()->withErrors(['error' => 'Gagal menambahkan data.']);
            }
        }
    
        public function edit($id)
        {
            $data = Berita::find($id);
            return view('berita.update', compact('data'));
        }
    
        public function update(Request $request, $id)
        {
            // Update an existing task
            $data = Berita::find($id);
    
            $request->validate([
                'judul' => 'required','image' => 'required','isi' => 'required','penulis' => 'required'
            ]);
    
            try {
                $data->update($request->except('token'));
                return redirect()->route('berita.index', ['id' => $data->id])->with('success', 'Data berhasil ditambahkan.');
            } catch (Exception $e) {
                return redirect()->route('berita.update')->withInput()->withErrors(['error' => 'Gagal menambahkan data.']);
            }
        }
    
        public function destroy($id)
        {
            // Delete a task
            $data = Berita::findOrFail($id);
            $data->delete();
            return redirect()->route('berita.index')->with('success', 'Data berhasil dihapus.');
        }
    }
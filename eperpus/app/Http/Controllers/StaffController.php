<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Staff;
    
    class StaffController extends Controller
    {
        public function index()
        {
            $data = Staff::all();
            return view('staff.index', compact('data'));
        }
    
        public function show($id)
        {
            $data = Staff::find($id);
            return view('staff.show', compact('data'));
        }
    
        public function create()
        {
            return view('Staff.create');
        }
    
        public function store(Request $request)
        {
            $request->validate([
                'nama' => 'required','image' => 'required','fakultas' => 'required','mata_pelajaran' => 'required'
            ]);
            try {
                $data = Staff::create($request->except('token'));
                return redirect()->route('staff.index', ['id' => $data->id])->with('success', 'Data berhasil ditambahkan.');
            } catch (Exception $e) {
                return redirect()->route('staff.create')->withInput()->withErrors(['error' => 'Gagal menambahkan data.']);
            }
        }
    
        public function edit($id)
        {
            $data = Staff::find($id);
            return view('staff.update', compact('data'));
        }
    
        public function update(Request $request, $id)
        {
            // Update an existing task
            $data = Staff::find($id);
    
            $request->validate([
                'nama' => 'required','image' => 'required','fakultas' => 'required','mata_pelajaran' => 'required'
            ]);
    
            try {
                $data->update($request->except('token'));
                return redirect()->route('staff.index', ['id' => $data->id])->with('success', 'Data berhasil ditambahkan.');
            } catch (Exception $e) {
                return redirect()->route('staff.update')->withInput()->withErrors(['error' => 'Gagal menambahkan data.']);
            }
        }
    
        public function destroy($id)
        {
            // Delete a task
            $data = Staff::findOrFail($id);
            $data->delete();
            return redirect()->route('staff.index')->with('success', 'Data berhasil dihapus.');
        }
    }
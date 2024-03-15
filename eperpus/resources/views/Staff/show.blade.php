
    @extends('layouts.app')
    @section('content')
        <h1>Show Staff</h1>
        <div>
                
        <div class="form-group">
            <label for="id_user">nama</label>
            <input type="text" name="nama" class="form-control" value={{$data->nama}} placeholder="Enter nama" readonly>
        </div>
    
        <div class="form-group">
            <label for="id_user">image</label>
            <input type="text" name="image" class="form-control" value={{$data->image}} placeholder="Enter image" readonly>
        </div>
    
        <div class="form-group">
            <label for="id_user">fakultas</label>
            <input type="text" name="fakultas" class="form-control" value={{$data->fakultas}} placeholder="Enter fakultas" readonly>
        </div>
    
        <div class="form-group">
            <label for="id_user">mata pelajaran</label>
            <input type="text" name="mata_pelajaran" class="form-control" value={{$data->mata_pelajaran}} placeholder="Enter mata pelajaran" readonly>
        </div>
            <div class="form-group">
            <label for="">status</label>
            <input type="text" value="{{ $data->status == 1 ? 'Aktif' : "Non Aktif" }}" class="form-control" readonly>
            </div>
            <div class="form-group">
            <label for="">tanggal buat</label>
            <input type="text" value="{{ $data->created_at }}" class="form-control" readonly>
            </div>
        </div>
        <div class="d-flex justify-content-end">
                <a href="{{route('staff.index')}}" class="btn btn-gray">Kembali</a>
                <a href="{{route('staff.edit', [$data->id])}}" class="btn btn-dark">Edit</button>
            </div>
    @endsection
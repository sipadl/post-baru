
    @extends('layouts.app')
    @section('content')
        <h1>Show Berita</h1>
        <div>
                
        <div class="form-group">
            <label for="id_user">judul</label>
            <input type="text" name="judul" class="form-control" value={{$data->judul}} placeholder="Enter judul" readonly>
        </div>
    
        <div class="form-group">
            <label for="id_user">image</label>
            <input type="text" name="image" class="form-control" value={{$data->image}} placeholder="Enter image" readonly>
        </div>
    
        <div class="form-group">
            <label for="id_user">isi</label>
            <input type="text" name="isi" class="form-control" value={{$data->isi}} placeholder="Enter isi" readonly>
        </div>
    
        <div class="form-group">
            <label for="id_user">penulis</label>
            <input type="text" name="penulis" class="form-control" value={{$data->penulis}} placeholder="Enter penulis" readonly>
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
                <a href="{{route('berita.index')}}" class="btn btn-gray">Kembali</a>
                <a href="{{route('berita.edit', [$data->id])}}" class="btn btn-dark">Edit</button>
            </div>
    @endsection
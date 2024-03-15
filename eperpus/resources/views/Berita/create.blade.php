
    @extends('layouts.app')
    @section('content')
        <h1>Create Berita</h1>
        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="{{ route('berita.store',)}}" method="POST">
        @csrf
            
        <div class="form-group">
                <label for="id_user">judul</label>
                <input type="text" name="judul" class="form-control" placeholder="Enter judul" value="{{ $data->judul ?? ''}}">
        </div>

        <div class="form-group">
                <label for="id_user">image</label>
                <input type="text" name="image" class="form-control" placeholder="Enter image" value="{{ $data->image ?? ''}}">
        </div>

        <div class="form-group">
                <label for="id_user">isi</label>
                <input type="text" name="isi" class="form-control" placeholder="Enter isi" value="{{ $data->isi ?? ''}}">
        </div>

        <div class="form-group">
                <label for="id_user">penulis</label>
                <input type="text" name="penulis" class="form-control" placeholder="Enter penulis" value="{{ $data->penulis ?? ''}}">
        </div>
            
            <div class="d-flex justify-content-end">
                <a href="{{route('role.index')}}" class="btn btn-warn">Kembali</a>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    @endsection
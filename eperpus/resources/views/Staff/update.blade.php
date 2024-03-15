
    @extends('layouts.app')
    @section('content')
        <h1>Update Staff</h1>
        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="{{ route('staff.update',[$data->id])}}" method="POST">
        @csrf
            
        <div class="form-group">
                <label for="id_user">nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Enter nama" value="{{ $data->nama ?? ''}}">
        </div>

        <div class="form-group">
                <label for="id_user">image</label>
                <input type="text" name="image" class="form-control" placeholder="Enter image" value="{{ $data->image ?? ''}}">
        </div>

        <div class="form-group">
                <label for="id_user">fakultas</label>
                <input type="text" name="fakultas" class="form-control" placeholder="Enter fakultas" value="{{ $data->fakultas ?? ''}}">
        </div>

        <div class="form-group">
                <label for="id_user">mata pelajaran</label>
                <input type="text" name="mata_pelajaran" class="form-control" placeholder="Enter mata pelajaran" value="{{ $data->mata_pelajaran ?? ''}}">
        </div>
            
            <div class="form-group">
            <label for="id_user">status</label>
            <select name="status" class="form-control">
                <option value="1">Aktif</option>
                <option value="0">Non-Aktif</option>
            </select>
            </div>
            
            <div class="d-flex justify-content-end">
                <a href="{{route('role.index')}}" class="btn btn-warn">Kembali</a>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    @endsection
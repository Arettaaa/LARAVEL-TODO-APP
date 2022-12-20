@extends('layout')
@section('content')
<div class="container d-flex justify-content-center align-items-center mt-5">
    <form method="POST" action="{{route('profileUpload')}}" class="card py-4 px-4 mt-4" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="position-relative mt-3 form-input">
            <label><b>PILIH GAMBAR</b></label>
            <input class="form-control" type="file" name="image_profile" id="image_profile">
        </div>
        <button type="submit" class="btn btn-primary me-3">Ubah</button>
        <a href="/profile" class="btn-secondary">Kembali</a>
    </form>
</div>
@endsection
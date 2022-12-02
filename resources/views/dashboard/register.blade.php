@extends('layout')

@section('content')

<div class="container my-5 d-flex justify-content-center align-items-center">
    <form method="POST" action="{{route('register.post')}}" class="card py-4 px-4">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @csrf
        <div class="text-center logo ml-3">
            <i class="fas fa-user-circle"></i>
        </div>
        <div class="text-center mt-3">
            
        <span class="info-text">Silahkan mengisi data di bawah untuk membuat akun baru</span>
        
        </div>
        <div class="position-relative mt-3 form-input">
            <label><b>Email</b></label>
            <input class="form-control" type="email" name="email">
            <i class="fa-solid fa-envelope"  style="color:#4D5FBA"></i>        
            </div>
        <div class="position-relative mt-3 form-input">
            <label><b>Nama Lengkap</b></label>
            <input class="form-control" type="text" name="name">
            <i class="fa-solid fa-user-plus" style="color:#4D5FBA"></i>        
            </div>
        <div class="position-relative mt-3 form-input">
            <label><b>Username</b></label>
            <input class="form-control" type="text" name="username">
            <i class="fa-solid fa-user-pen" style="color:#4D5FBA"></i>
        </div>
        <div class="position-relative mt-3 form-input">
            <label><b>Password</b></label>
            <input class="form-control" type="password" name="password">
            <i class="fa-solid fa-user-lock" style="color:#4D5FBA"></i>
        </div>
        
        <div class=" mt-5 d-flex justify-content-between align-items-center">
            <span><a href="/" style="text-decoration: underline;">Sudah punya akun?</a></span>
            <button type="submit" class="go-button"><i class="fa-solid fa-person-circle-plus"></i></button>
        </div>
    </form>
</div>
@endsection

    
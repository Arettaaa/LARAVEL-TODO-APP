@extends('layout')

@section('content')
<div class="container d-flex justify-content-center align-items-center mt-5">
    <form method="POST" action="{{route('login.auth')}}" class="card py-4 px-4 mt-4">
        @csrf
        @if (Session::get('success'))
             <div class="alert alert-success w-75">
                 {{ Session::get('success') }}
            </div>
        @endif
        @if (Session::get('fail'))
             <div class="alert alert-danger">
                 {{ Session::get('fail') }}
            </div>
        @endif
        @if (Session::get('notAllowed'))
             <div class="alert alert-danger">
                 {{ Session::get('notAllowed') }}
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-success">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="text-center logo">
            <i class="fas fa-user-circle"></i>
        </div>
        <div class="text-center mt-3">
            
        <span class="info-text">Silahkan mengisi username dan password untuk login</span>
        
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
            <span><a href="{{route('register')}}" style="text-decoration: underline;">Tidak punya akun?</a></span>
            <button type="submit" class="go-button"><i class="fa-solid fa-person-circle-plus"></i>></button>
        </div>
    </form>
</div>
@endsection

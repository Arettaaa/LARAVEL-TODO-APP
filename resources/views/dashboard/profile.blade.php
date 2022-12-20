@extends('layout')

@section('content')

<body>
<div clas="profile">
@if(is_null(Auth::user()->image_profile))
<img src="{{asset('assets/img/people.png')}}" alt="" srcset=""  width="100" style="border-radius: 50%" class="d-block m-auto">
@else 
    <img src="{{asset('assets/img/'.Auth::user()->image_profile )}}" alt="" srcset=""  width="100" style="border-radius: 50%" class="d-block m-auto">
@endif
<div>
<a href="">Ubah Foto Profile</a>
</div>
<div class="name">{{Auth::user()->name}}</div>
<div class="name">{{Auth::user()->username}}</div>
<div class="name">{{Auth::user()->email}}</div>
</div>
</body>

@endsection
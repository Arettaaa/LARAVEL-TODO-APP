@extends('layout')

@section('content')

<body>
<div class="profile" style="background-color: #FFFF; height: auto; width: 350px; margin: 10vh auto; border-radius: 25px; padding-bottom: 1px;">
<h1>{{Auth::user()->name}}</h1>
<div class = "image">
@if(is_null(Auth::user()->image_profile))
<img src="{{asset('assets/img/people.png')}}" alt="" srcset=""  style="display: block; margin: 0 auto; margin-top: 20px; width: 140px; height: 140px;">
@else 
    <img src="{{asset('assets/img/'.Auth::user()->image_profile )}}" alt="" srcset="" style="display: block; margin: 0 auto; margin-top: 20px; width: 140px; height: 140px;">
@endif
</div>
<div class="name">Name: {{Auth::user()->name}}</div>
<div class="name">Username: {{Auth::user()->username}}</div>
<div class="name">Email: {{Auth::user()->email}}</div>
<div>
<a href="/upload" class="btn btn-primary" style="width:160px; height: 50px; border-radius:13px; padding: 10px 10px ; margin-top: 30px; margin:0 auto; margin-bottom: 30px; background:#4D5FBA; color:#FFFF;
display: flex; align-items: center; font-weight:500;">Ubah Foto Profile</a>
</div>
</div>
</div>
</body>
 
@endsection



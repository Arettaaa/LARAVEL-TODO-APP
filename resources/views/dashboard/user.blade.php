@extends('layout')

@section('content')
<div class = "table-container">
<table class = "table">
<thead>
<tr>
<td>Name</td>
<td>Username</td>
<td>Email</td>
<td>Created at</td>
</tr>
</thead>
<tbody>
@foreach($user as $item)
<tr>
<td>{{$item->name}}</td>
<td>{{$item->username}}</td>
<td>{{$item->email}}</td>
<td>{{$item->created_at}}</td>
</tr>
@endforeach
</tbody>
</table>
</div>
@endsection

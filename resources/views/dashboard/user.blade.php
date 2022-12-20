@extends('layout')

@section('content')
<table>
<thead>
<tr>
<td>Nama</td>
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
@endsection

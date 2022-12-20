@extends('layout')

    @section('content')
    <div class="wrapper bg-white" style="margin-top: 100px">
        @if (Session::get('notAllowed'))
            <div class="alert alert-success">
                {{ Session::get('notAllowed') }}
            </div>
        @endif
        @if (Session::get('successAdd'))
            <div class="alert alert-success">
                {{ Session::get('successAdd') }}
            </div>
        @endif
        @if (Session::get('successUpdate'))
            <div class="alert alert-success">
                {{ Session::get('successUpdate') }}
            </div>
        @endif
        @if (Session::get('successDelete'))
            <div class="alert alert-success">
                {{ Session::get('successDelete') }}
            </div>
        @endif
        @if (Session::get('successUp'))
            <div class="alert alert-success">
                {{ Session::get('successUp') }}
            </div>
        @endif
        
        @if (Auth::user()->role == 'admin')
        <div class="d-flex justify-content-center mt-5">
        <a href="todo/user" class="btn btn-primary">
        Lihat data
        </a>
        </div>
        @else
        

        <div class="d-flex align-items-start justify-content-between">
            <div class="d-flex flex-column">
                <div class="h5">My Todo's</div>
                <p class="text-muted text-justify">
                    Here's a list of activities you have to do
                </p>
                <br>
                <span>
                    <a href="{{route('todo.create')}}" class="text-success">Create</a> | <a href="{{route('todo.complated')}}">Complated</a>
                </span>
            </div>
            <div class="info btn ml-md-4 ml-0">
                <span class="fas fa-info" title="Info"></span>
            </div>
        </div>
        <div class="work border-bottom pt-3">
            <div class="d-flex align-items-center py-2 mt-1">
                <div>
                    <span class="text-muted fas fa-comment btn" style="color:#4D5FBA"></span>
                </div>
                <div class="text-muted">{{$todos->count()}} todos</div>
                <button class="ml-auto btn bg-white text-muted fas fa-angle-down" type="button" data-toggle="collapse"
                    data-target="#comments" aria-expanded="false" aria-controls="comments"></button>
            </div>
        </div>
        <div id="comments" class="mt-1">
            @foreach($todos as $todo)
            <div class="comment  align-items-start justify-content-between">
                <div class="mr-2 d-flex">
                @if ($todo['status']==1)
                <span class="fa-solid fa-bookmark text-secondary btn"></span>
                @else
                <form action="{{route('todo.update-complated', $todo['id'])}}" method="POST">
                @csrf
                @method('PATCH')
                <button type= "submit" class="fas fa-circle-check text-primary btn"></button>
                </form>
                @endif
                <div class="d-flex flex-column w-75"> 
                    <a href="/todo/edit/{{ $todo['id'] }}" class="text-justify">
                        {{ $todo['title'] }}
                    </a>
                    <p class="text-muted"> {{ $todo['status'] ? 'Complated' : 'On-Progress' }} <br> 
                    <span class="date">  
                    @if($todo['status']==1)
                    selesai pada:{{ \Carbon\Carbon::parse($todo['date_time'])->format('j F, Y') }}</span></p>
                    @else
                    target selesai: {{ \Carbon\Carbon::parse($todo['date'])->format('j F, Y') }}</span></p> 
                    @endif
                </div>
                <div class="ml-auto">
                <form action ="{{route('todo.delete', $todo ['id'])}}" method="GET">
                @csrf
                @method('DELETE')
                <button type="submit" class="fa-solid fa-trash text-danger btn"></button>
                </form>
                </div>
            </div>
    
            @endforeach
        
    
        </div>
    @endif
    </div>

@endsection

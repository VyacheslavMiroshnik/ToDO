@extends('layouts.app')
@section('title','Create group')


@section('content')
    <div class="d-flex  mb-4">
        <a href="{{route('group',['group'=>$group])}}" class="btn btn-sm btn-outline-secondary float-start" >Вернуться назад</a>
    </div>

    <form class="mb-3" action="{{route('post.student',['group'=>$group])}}" method="post" >
        @csrf
        @method('post')
        <div class="col-auto mb-4">
            <label for="name" class="form-label">Name</label>
            <input type="text"  class="form-control @error('name') is-invalid @enderror" id="name"  name = 'name' value="{{old('name')}}" >
            @error('name')
            <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <div class="col-auto mb-4">
            <label for="surname" class="form-label">Surname</label>
            <input type="text" class="form-control @error('surname') is-invalid @enderror" id="surname" name="surname"  value="{{old('surname')}}">
            @error('surname')
            <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>

        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">Confirm identity</button>
        </div>
    </form>

@endsection

@extends('layouts.app')
@section('title','Create group')


@section('content')
    <div class="d-flex mb-4">
        <a href="{{route('index')}}" class="btn btn-sm btn-outline-secondary float-start" >Вернуться назад</a>
    </div>

    <form class="mb-3" action="{{route('post.group')}}" method="post" >
        @csrf
        @method('post')
        <div class="col-auto mb-4">
            <label for="title" class="form-label">Title</label>
            <input type="text"  class="form-control @error('title') is-invalid @enderror" id="title"  name = 'title' value="{{old('title')}}" >
            @error('title')
            <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <div class="col-auto mb-4">
            <label for="start_from" class="form-label">Start_from</label>
            <input type="date" class="form-control @error('start_from') is-invalid @enderror" id="start_from"  name="start_from" >
            @error('start_from')
            <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <div class="col-auto mb-4">
            <input type="checkbox" class="btn-check " name="isActive" id="isActive" autocomplete="off" >
            <label class="btn btn-outline-success" for="isActive">IsActive</label>
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">Confirm identity</button>
        </div>
    </form>

@endsection

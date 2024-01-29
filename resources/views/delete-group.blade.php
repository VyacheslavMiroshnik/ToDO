@extends('layouts.app')
@section('title', 'Update group')
@section('content')
    <div class="container m-auto w-25">
        <div class="d-flex mb-4">
            <a href="{{ route('group', ['group' => $group->id]) }}"
                class="btn btn-sm btn-outline-secondary float-start">Вернуться назад</a>
        </div>
        <div class="col mb-4">Удалить группу {{ $group->title }}</div>
        <form class="mb-3" action="{{ route('delete.group', ['group' => $group->id]) }}" method="post">
            @csrf
            @method('DELETE')
            <div class="col-auto">
                <button type="submit" class="btn btn-danger mb-3">Confirm identity</button>
            </div>
        </form>
    </div>
@endsection

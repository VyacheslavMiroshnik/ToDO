@extends('layouts.app')
@section('title', 'Create group')
@section('content')
    <div class="container w-25">
        <div class="d-flex  mb-4">
            <a href="{{ route('student', ['student' => $student->id, 'group' => $student->group_id]) }}"
                class="btn btn-sm btn-outline-secondary float-start">Вернуться назад</a>
        </div>
        <div class="col mb-4"> Удалить студента {{ $student->name }} {{ $student->surname }}</div>
        <form class="mb-3" action="{{ route('delete.student', ['group' => $group->id, 'student' => $student->id]) }}"
            method="post">
            @csrf
            @method('DELETE')
            <div class="col-auto">
                <button type="submit" class="btn btn-danger mb-3">Delete</button>
            </div>
        </form>
    </div>
@endsection

@extends('layouts.app')

@section('title','student')
@section('content')

    @if( isset($student))

        <a href="{{route('group',['group'=>$student->group_id])}}" class="btn btn-sm btn-outline-secondary float-start" >Вернуться назад</a>
        <a href="{{route('group',['group'=>$student->group_id])}}" class="btn btn-sm btn-outline-danger float-end" >Удалить студента</a>
        <table class="table table-striped text-center">
        <h2 class="text-center" >
            Информация о студенте
        </h2>
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>
            <th scope="col">surname</th>
            <th scope="col">group_id</th>
            <th scope="col">created_at</th>
            <th scope="col">updated_at</th>
        </tr>
        </thead>
        <tbody>

        <tr>
            <th scope="row">{{$student->id}}</th>
            <td>{{$student->name}}</td>
            <td>{{$student->surname}}</td>
            <td>{{$student->group_id}}</td>
            <td>{{$student->created_at}}</td>
            <td>{{$student->updated_at}}</td>
        </tr>
        </tbody>
    </table>

    @endif
@endsection

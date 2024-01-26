@extends('layouts.app')

@section('title','student')
@section('content')







    <table class="table table-striped">
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
            <td class = 'table-primary p-0'><a href="{{route('student',['student'=>$student->id,'group'=>$student->group_id])}}" class="btn btn-link btn-danger w-100 p-3 link-light link-underline-opacity-0 link-underline-opacity-0-hover">Подробнее</a></td>
        </tr>
        </tbody>
    </table>
    <a href="{{route('group',['group'=>$student->group_id])}}" class="btn btn-link">назад</a>


@endsection

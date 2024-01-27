@extends('layouts.app')

@section('title','students')

@section('content')

        <li class="list-group-item">{{$group->id}}</li>
        <li class="list-group-item">{{$group->title}}</li>
        <li class="list-group-item">{{$group->start_from}}</li>
        <li class="list-group-item">{{$group->isActive===0?'false':'true'}}</li>
        <li class="list-group-item">{{$group->created_at}}</li>
        <li class="list-group-item">{{$group->updated_at}}</li>


    @if(count($students)>0)
        <h2>Состав группы {{$group->title}}</h2>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">name</th>
                <th scope="col">surname</th>
            </tr>
            </thead>
            <tbody>
            @foreach($students as $student)
                <tr>
                    <th scope="row">{{$student->id}}</th>
                    <td>{{$student->name}}</td>
                    <td>{{$student->surname}}</td>
                    <td class = 'table-primary p-0'><a href="{{route('student',['student'=>$student->id,'group'=>$student->group_id])}}" class="btn btn-link btn-danger w-100 p-3 link-light link-underline-opacity-0 link-underline-opacity-0-hover">Подробнее</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>

    @endif
@endsection

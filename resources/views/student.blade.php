@extends('layouts.app')

@section('title','student')
@section('content')

    @if( isset($student))

        <a href="{{route('group',['group'=>$student->group_id])}}" class="btn btn-sm btn-outline-secondary float-start" >Вернуться назад</a>
        <a href="{{route('clear.student',['group'=>$student->group_id,'student'=>$student->id])}}" class="btn btn-sm btn-outline-danger float-end" >Удалить студента</a>
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
            <td class="nav-item"><a href="{{route('edit.student',['student'=>$student->id,'group'=>$student->group_id])}}" class="nav-link">{{$student->id}}</a></td>
            <td class="nav-item"><a href="{{route('edit.student',['student'=>$student->id,'group'=>$student->group_id])}}" class="nav-link">{{$student->name}}</a></td>
            <td class="nav-item"><a href="{{route('edit.student',['student'=>$student->id,'group'=>$student->group_id])}}" class="nav-link">{{$student->surname}}</a></td>
            <td class="nav-item"><a href="{{route('edit.student',['student'=>$student->id,'group'=>$student->group_id])}}" class="nav-link">{{$student->group_id}}</a></td>
            <td class="nav-item"><a href="{{route('edit.student',['student'=>$student->id,'group'=>$student->group_id])}}" class="nav-link">{{$student->created_at}}</a></td>
            <td class="nav-item"><a href="{{route('edit.student',['student'=>$student->id,'group'=>$student->group_id])}}" class="nav-link">{{$student->updated_at}}</a></td>

        </tr>
        </tbody>
    </table>

    @endif
@endsection

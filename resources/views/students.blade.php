@extends('layouts.app')

@section('title','students')

@section('content')
    <a href="{{route('index')}}" class="btn btn-sm btn-outline-secondary float-start" >Вернуться назад</a>
    <a href="{{route('create.student',['group'=>$group->id])}}" class="btn btn-sm btn-outline-success float-end" >Добавить студента</a>
    <h2 class="text-center mb-4" >Информация про группу {{$group->title}}</h2>

    <table class="table table-striped  m-auto text-center mb-4">
        <thead>
        <tr>
            <th scope="col ">id</th>
            <th scope="col">title</th>
            <th scope="col">start_from</th>
            <th scope="col">isActive</th>
            <th scope="col">created_at</th>
            <th scope="col">updated_at</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td class="nav-item"><a href="{{route('edit.group',['group'=>$group->id])}}" class="nav-link">{{$group->id}}</a></td>
                <td class="nav-item"><a href="{{route('edit.group',['group'=>$group->id])}}" class="nav-link">{{$group->title}}</a></td>
                <td class="nav-item "><a href="{{route('edit.group',['group'=>$group->id])}}" class="nav-link">{{$group->start_from}}</a></td>
                <td class="nav-item {{$group->isActive===0?'bg-danger':'bg-success'}}"><a href="{{route('group',['group'=>$group->id])}}" class="nav-link"></a></td>
                <td class="nav-item "><a href="{{route('edit.group',['group'=>$group->id])}}" class="nav-link">{{$group->created_at}}</a></td>
                <td class="nav-item "><a href="{{route('edit.group',['group'=>$group->id])}}" class="nav-link">{{$group->updated_at}}</a></td>
                <td class=" "><a href="{{route('clear.group',['group'=>$group->id])}}" class="btn btn-sm btn-outline-danger " >Удалить группу</a></td>
            </tr>
        </tbody>

    </table>



    @if(count($group->student()->get())>0)
        <h2 class="text-center" >Состав группы {{$group->title}}</h2>
        <table class="table table-striped text-center ">
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">name</th>
                <th scope="col">surname</th>
            </tr>
            </thead>
            <tbody>
            @foreach($group->student()->get() as $student)
                <tr>
                    <td class="nav-item"><a href="{{route('student',['student'=>$student->id,'group'=>$student->group_id])}}" class="nav-link">{{$student->id}}</a></td>
                    <td class="nav-item"><a href="{{route('student',['student'=>$student->id,'group'=>$student->group_id])}}" class="nav-link">{{$student->name}}</a></td>
                    <td class="nav-item"><a href="{{route('student',['student'=>$student->id,'group'=>$student->group_id])}}" class="nav-link">{{$student->surname}}</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>

    @endif
@endsection

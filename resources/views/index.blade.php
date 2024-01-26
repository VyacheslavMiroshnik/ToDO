@extends('layouts.app')

@section('title','group')

@section('content')

@if(count($groups)>0)
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">title</th>
            <th scope="col">start_from</th>
            <th scope="col">isActive</th>
            <th scope="col">created_at</th>
            <th scope="col">updated_at</th>
        </tr>
        </thead>
        <tbody>
    @foreach($groups as $group)
            <tr>
                <th scope="row">{{$group->id}}</th>
                <td>{{$group->title}}</td>
                <td>{{$group->start_from}}</td>
                <td>{{$group->isActive}}</td>
                <td>{{$group->created_at}}</td>
                <td>{{$group->updated_at}}</td>
                <td class = 'table-primary p-0'><a href="{{route('group',['group'=>$group->id])}}" class="btn btn-link btn-danger w-100 p-3 link-light link-underline-opacity-0 link-underline-opacity-0-hover">Подробнее</a></td>
            </tr>
@endforeach
        </tbody>
    </table>

@endif
@endsection






@extends('layouts.app')
@section('title', 'group')
@section('content')
    <a href="{{ route('create.group') }}" class="btn btn-sm btn-outline-success float-end">Добавить группу</a>
    <h2 class="text-center mb-4">Список групп</h2>
    @if (count($groups) > 0)
        <table class="table table-striped w-50 m-auto text-center">
            <thead>
                <tr>
                    <th scope="col">title</th>
                    <th scope="col">start_from</th>
                    <th scope="col">is_active</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($groups as $group)
                    <tr>
                        <td class="nav-item">
                            <a href="{{ route('group', ['group' => $group->id]) }}" class="nav-link">{{ $group->title }}</a>
                        </td>
                        <td class="nav-item ">
                            <a href="{{ route('group', ['group' => $group->id]) }}"
                                class="nav-link">{{ $group->start_from }}</a>
                        </td>
                        <td class="nav-item {{ $group->is_active === 0 ? 'bg-danger' : 'bg-success' }}">
                            <a href="{{ route('group', ['group' => $group->id]) }}" class="nav-link"></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection

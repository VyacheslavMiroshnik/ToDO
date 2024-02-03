@extends('layouts.app')

@section('content')
<div class="container">
                <table class="table table-striped w-50 m-auto text-center">
                    <thead>
                    <tr>
                        <th scope="col">name</th>
                        <th scope="col">email</th>
                        <th scope="col">id</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="nav-item">
                                {{ $user->name }}
                            </td>
                            <td class="nav-item ">
                                {{ $user->email }}
                            </td>
                            <td class="nav-item ">
                                {{ $user->id }}
                            </td>
                        </tr>
                    </tbody>
                </table>
</div>
@endsection

@extends('master')

@section('title', 'đây là trang chủ')

@section('content')

    <p> Đây là phần content của test</p>
    @parent

    @if (@isset($users))
        {{ $users }}
        @foreach ($users as $user)
            <p>This is id user {{ $user->id }}</p>
            <p>This is username {{ $user->username }} </p>
        @endforeach
    @endif

@endsection

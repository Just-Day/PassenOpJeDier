@extends('default')

@section('title')
    {{"All users"}}
@endsection

@section('content')
<a href="/" class="filter-section-users__back"> Home </a>
<ul class="u-grid-12 u-grid-gap-2">
    @foreach($users as $user)
        @include('users.components.userCard--index')
    @endforeach
</ul>
@endsection

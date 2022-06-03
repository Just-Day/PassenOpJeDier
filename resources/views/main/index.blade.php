@extends('default')
@section('title')
    {{"Home"}}
@endsection    

@section('content')
@include('main.components.topbar--index')
<ul class="u-grid-12 u-grid-gap-2">
    @include('main.components.pet--index')
    @include('main.components.houses--index') 
</ul>
@endsection
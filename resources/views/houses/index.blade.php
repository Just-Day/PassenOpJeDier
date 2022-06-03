@extends('default')
<script src="/js/main_houses.js" defer></script>
@section('title')
    {{"All houses"}}
@endsection    

@section('content')
@include('houses.components.checkbox--index')
    <ul class="u-grid-12 u-grid-gap-2">
        @foreach($houses as $house)
            @include('houses.components.housesCard--index')
        @endforeach
    </ul>
<br>
<a href="/house/create" class=" a-popup create__link"> Create own House </a>
@endsection
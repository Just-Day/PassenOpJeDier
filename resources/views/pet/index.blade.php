@extends('default')
<script src="/js/main_pet.js" defer></script>
@section('title')
    {{"All pets"}}
@endsection    

@section('content')
@include('pet.components.checkbox--index')
<ul class="u-grid-12 u-grid-gap-2">
    @foreach($pet as $pet)
        @include('pet.components.petCard--index')
    @endforeach
</ul>
<br>
<a href="/pet/create" class=" a-popup create__link"> Create own Pet </a>
@endsection
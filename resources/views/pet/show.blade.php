@extends('default')
<script src="/js/btn_show.js"> </script>
@section('title')
    {{$pet->kind . " " . $pet->name}}
@endsection
@section('content')
    @include('pet.components.petCard--show')
@endsection
@extends('default')
<script src="/js/btn_show.js"> </script>
@section('title')
    {{$houses->kind . " " . $houses->name}}
@endsection
@section('content')
    @include('houses.components.housesCard--show')
@endsection
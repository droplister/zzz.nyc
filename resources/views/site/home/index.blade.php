@extends('layouts.site')

@section('title', 'Area 17 :: Front End :: Home')

@section('body')
  <div id="wrapper">
    @include('home.partials.main')
    @include('home.partials.aside')
  </div>
@endsection
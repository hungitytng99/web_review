@extends('Layouts.page')
@section('title', 'Foodee - Tìm kiếm')
@section('css')
<link rel="stylesheet" href="/SearchPage/css/search_result.css">
@endsection

@section('js')
<script src="/SuggestionPage/js/suggestion.js"></script>
@endsection

@section('content')
@include('Layouts.header')
@include('Layouts.footer')
@endsection
@extends('master')
@extends('partialfoo')
@section('style')
    <style>
        body {background: green; color: white;}
    </style>
@endsection

@section('script')
    <script>
        alert("저는 자식 뷰의 'script' 섹션입니다.");
    </script>
@endsection

@section('content')
    @include('partialfoo')
    <p>저는 자식 뷰의 'content' 섹션입니다.</p>
@endsection
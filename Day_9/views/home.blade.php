@extends('layout.masterlayout')

@section('content')
    <h2>Home Page</h2>
    <p>This is the Home page.</p>
@endsection


@section('title')
Home
@endsection

{{-- if you you section two times si the always run First ine but in @push They add also secind @push --}}

@push('scripts')
    <script src="/ex.js"></script>
    <script src="/bt.js"></script>
    <script src="/jQ.js"></script>
@endpush

@push('scripts')
    <script src="/new.js"></script>
@endpush

@push('style')
    <link rel="stylesheet" href="css/bootstrap.css">
@endpush

@prepend('style')
    <style>
        body
        {
            background-color: green;
        }
    </style>
@endprepend


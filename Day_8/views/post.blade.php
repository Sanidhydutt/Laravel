@extends('layout.masterlayout')

@section('content')

<h2>Post Page</h2>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, nisi.</p>

@endsection 

@section('sidebar')
@parent
<p> now you can see it through</p>
@endsection

@section('title')
Post
@endsection
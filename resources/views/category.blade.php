@extends('layouts.main')

@section('container')
<h1 class="mb-5">Product Category : {{ $category }}</h1>

@foreach ($products as $product)
<article>
    <h2><a href="/products/{{ $product->slug }}">{{ $product->title }}</a></h2>
</article>
    
@endforeach
@endsection
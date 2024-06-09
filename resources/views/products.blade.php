@extends('layouts.main')

@section('title', "Todos os Produtos")

@section('content')

        <h1>
            Todos os Produtos
        </h1>


        @foreach($products as $product)
            <div class="col-3 card m-2">
                <h1>{{ $product->name_product }}</h1>
                <p>{{ $product->price }}</p>
            </div>
        @endforeach


@endsection
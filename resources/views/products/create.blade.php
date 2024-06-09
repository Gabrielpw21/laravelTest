@extends('layouts.main')

@section('title', 'Criar Produto')

@section('content')

<h2 class="text-center mt-5">Criar Novo Produto</h2>

<div id="product-create" class="col-md-6">
    <form action="/products" method="post">
        @csrf
        <div class="form-group">
            <label for="name-product">Nome do Produto:</label>
            <input type="text" name="name_product" id="name-product" class="form-control" placeholder="Nome do Produto">
        </div>
        <div class="form-group">
            <label for="price-product">Preço do Produto:</label>
            <input type="text" name="price" id="price-product" class="form-control" placeholder="Valor do Produto">
        </div>
        <div class="form-group">
            <label for="desc-product">Descrição do Produto:</label>
            <textarea type="text" name="description" id="desc-product" class="form-control" placeholder="Descrição do Produto"></textarea>
        </div>
        <input type="submit" class="btn btn-primary mt-2 float-end" value="Criar Produto">
    </form>
</div>

@endsection
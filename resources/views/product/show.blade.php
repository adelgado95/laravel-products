@extends('layout')
@section('content')
<fieldset disabled>
<div class="py-5 text-center">
    <h2>One Product</h2>
    <p class="lead">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
  </div>
<div class="row">
    <div class="col-md-6 mb-3">
        <label for="description">Description</label>
        <input id="description" name="description" type="text" class="form-control" value="{{ $product->description }}">
    </div>
    <div class="col">
        <label for="description">Stock</label>
        <input id="stock" name="stock" type="number" class="form-control" value="{{ $product->stock }}">
    </div>
</div>
<form>

<div class="row">
    <div class="col-md-6 mb-3">
        <label for="description">Price</label>
        <input id="price" name="price" type="bumber" class="form-control" value="{{ $product->price }}">
    </div>
    <div class="col">
        <label for="description">Generic</label>
        <input id="generic" name="generic" type="text" class="form-control" value="{{ $product->generic }}" >
    </div>
</div>

<div class="row">
    <div class="col">
        <label for="description">Laboratory</label>
        <input id="description" name="laboratory" type="text" class="form-control" value="{{ $product->laboratory }}">
    </div>
    <div class="col">
        <label for="description">Content</label>
        <input type="text" name="quantity" class="form-control" value="{{ $product->quantity }}">
    </div>
</div>
</fieldset>
<hr class="mb-4">
<a class="btn btn-primary btn-lg btn-block" href="{{ route('product.index') }}" role="button">Back to All Products</a>

<form>
@stop


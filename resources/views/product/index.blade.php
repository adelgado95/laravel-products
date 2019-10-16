@extends('layout')
@section('content')
<h2>All Products</h2>
    <p class="lead">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
<table class="table table-sm table-bordered">
  <thead>
    <tr>
      <th>Id</th>
      <th>Descripcion</th>
      <th>Generico</th>
      <th>Precio Actual</th>
      <th>Stock</th>
      <th>Laboratory</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($products as $product)
    <tr>
      <td>{{ $product->id }}</td>
      <td>{{ $product->description }}</td>
      <td>{{ $product->generic }}</td>
      <td>{{ $product->price }}</td>
      <td>{{ $product->stock }}</td>
      <td>{{ $product->laboratory }}</td>
      <td>
        <a class="btn btn-success btn-sm" href="{{ route('product.edit', $product->id) }}" role="button">Edit</a>
        <a class="btn btn-danger btn-sm" href="#" role="button">Delete</a>
      </td>

    </tr>
  @endforeach
  <tfoot>
    <tr>
      <td>Sum</td>
      <td>$180</td>
    </tr>
  </tfoot>
</table>
@endsection

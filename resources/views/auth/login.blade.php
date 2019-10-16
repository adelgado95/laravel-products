@extends('layout')
@section('content')
<h2>Login</h2>
    <p class="lead">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
<form method="post" action="/login">
{!! csrf_field() !!}
<div class="row">
    <div class="col-md-6 mb-3">
        <label for="username">Description</label>
        <input name="email" type="email" class="form-control" placehol der="Email">
    </div>
    <div class="col">
        <label for="password">Stock</label>
        <input name="password" type="password" class="form-control" placeholder="****" >
    </div>
</div>

<hr class="mb-4">
<button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
</form>
@stop

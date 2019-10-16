@extends('layout')
@section('content')
<div class="py-5 text-center">
    @if (auth()->guest())
        <h1>Eres invitado</h1>
    @endif
    @if (auth()->check())
        <h1>Eres {{ Auth::user()->name }}</h1>
    @endif

    <h2>Welcome to Inventory Product</h2>
    <p class="lead">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
</div>
@stop
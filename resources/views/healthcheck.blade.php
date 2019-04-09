@extends('layout')

@section('title')
Laravel Health Check
@stop

@section('header')
<header>
  <nav>
    <ul>
      <li>
        <a href="/">Home</a>
      </li>
      <li>
        <a href="/healthcheck">Health Check</a>
      </li>
      <li>
        <a href="/about">About</a>
      </li>
    </ul>
  </nav>
</header>
@stop

@section('content')
<div class="title">
    PHP/LARAVEL up and running...
</div>
@stop

@section('footer')
<footer>
  <small>Built with PHP/Laravel using Artisan</small>
  <br>
  <small>Dev: Michael Marlow</small>
</footer>
@stop

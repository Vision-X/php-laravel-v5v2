@extends('layout')

@section('title')
About
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
        <p>About</p>
      </li>
      <li>
        <a href="/php-version">PHP version</a>
      </li>
    </ul>
  </nav>
</header>
@stop


@section('content')
<div class="tools">
  <h3>TOOLS USED:</h3>
  <ul>
    <li>PHP</li>
    <li>Laravel</li>
    <li>Composer</li>
    <li>Artisan</li>
  </ul>
</div>
@stop


@section('footer')
<footer>
  <small>Built with PHP/Laravel using Artisan</small>
  <br>
  <small>Dev: Michael Marlow</small>
</footer>
@stop

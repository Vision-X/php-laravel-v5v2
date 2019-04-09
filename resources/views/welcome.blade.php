@extends('layout')

@section('title')
Laravel Basics
@stop

@section('header')
<header>
  <nav>
    <ul>
      <li>
        <p>Home</p>
      </li>
      <li>
        <a href="/healthcheck">Health Check</a>
      </li>
      <li>
        <a href="/about">About</a>
      </li>
      <li>
        <a href="/php-version">PHP version</a>
      </li>
    </ul>
  </nav>
</header>
@stop

@section('content')
<div class="title">
  Welcome to Laravel
</div>
@stop

@section('footer')
<footer>
  <small>Built with PHP/Laravel using Artisan</small>
  <br>
  <small>Dev: Michael Marlow</small>
</footer>
@stop
